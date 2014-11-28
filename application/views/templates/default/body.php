<!DOCTYPE html>
<html lang="fr_FR">
<head>
	<meta charset="UTF-8">
	<title>My Blog/Posts</title>
	<link rel="stylesheet" href="<?=URL::base().'assets/css/templates/'.$templateName.'/style.css';?>"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<header class="base">
		<div>
			<h1><?= $options->get('blog_name') ?></h1>
			<div>
				<?=$loginString; ?>
				<nav>
					<ul>
						<li><a href="<?=URL::base();?>posts/page/1">Accueil</a></li>
						<li><a href="<?=URL::base();?>admin/main">Admin</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="main base">
		<div class="clearfix">
			<section>
				<h2><?= $postManager->isOnePost() ? 'Article' : 'Blog' ?></h2>
				<?php if($postManager->havePosts()):?>
					<?= $postManager->getPagedLinks();?>
					<?php while ($postManager->havePosts() > 0): ?>
						<?php $post = $postManager->getNextPost();?>
						<article class="clearfix">
							<h3><?php if(!$postManager->isOnePost()): ?>
								<a href="<?=URL::base();?>posts/id/<?=$post['id'];?>">
							<?php endif ?><?= $post['title']; ?>
							<?php if(!$postManager->isOnePost()): ?>
								</a>
							<?php endif ?></h3>
							<p>Posted by <?= $post['pseudo'];?><?= /*' in: '.$post['category'];*/''; ?> on <?= $post['date']; ?></p>
							<div class="clearfix"><?= $post['content']; ?></div>
							<footer>
								<p class="tags">Tags : 
									<?php foreach ($tagManager->getTags($post['id']) as $tag) :?>
										<a href="<?=URL::base();?>posts/tag/<?= $tag['name']; ?>"><?= $tag['name']; ?></a> 
									<?php endforeach?>
								</p>
								<div>
									<?php if(isset($_SESSION["isAdmin"])): ?>
										<a href="<?= URL::base().'admin/main/'.$post['id']; ?>">Edit</a>
									<?php endif;?>
									<?php if(!$postManager->isOnePost()): ?>
										<a href="<?= URL::base().'posts/id/'.$post['id']; ?>">Read More</a>
										<a href="<?= URL::base().'posts/id/'.$post['id']; ?>"><?=$commentManager->getCommentCount($post['id'])['commentCount'];?> Comment(s)</a>
									<?php endif ?>
								</div>
							</footer>
							<?php if($postManager->isOnePost()): ?>
								<p>Comments :</p>
								<div class="comments">
								</div>
								<button id="updateComments" type="button">Update Comments</button>
								<?php if(isset($_SESSION['pseudo'])): ?>
									<form>
										<fieldset>
											<legend>Nouveau commentaire</legend>
											<textarea name="commentContent" id="commentContent"></textarea>
											<button id="sendComment" type="button">Envoyer</button>
										</fieldset>
									</form>
								<?php endif;?>
							<?php endif;?>
						</article>
					<?php endwhile ?>
					<?= $postManager->getPagedLinks();?>
				<?php else:?>
					<strong>Désole il n'y a pas d'article correspondant</strong>
				<?php endif;?>
			</section>
		</div>
	</div>
	<?php if($postManager->isOnePost()): ?>
		<script type="text/javascript">
		var lastCommentID = <?= isset($lastCommentId)?$lastCommentId:0 ?>;
		function getLastComments()
		{
			$.ajax("<?= URL::base()?>ajax/getlastcomments", {method:'post', data:{'id': <?= $postId?>, 'last_id': lastCommentID}}).done(function(result){
				var element = $(".comments")
				for (var i = 0; i < result.length; i++)
				{
					element.append('<div class="comment clearfix" data="'+result[i]['id']+'"><p>'+result[i]['content']+'</p><footer><p>Posted by '+result[i]['pseudo']+' on '+result[i]['date']+'</p><?php if(isset($_SESSION["isAdmin"])): ?><button class="deleteComment" data="'+result[i]['id']+'">X</button><?php endif;?></footer></div>');

					lastCommentID = result[i]['id'];
					<?php if(isset($_SESSION['isAdmin'])): ?>
						$(".deleteComment", element).on("click", function(){
							$.ajax("deleteComment.php?id="+$(this).attr('data')).done(function(result){
								$(".comment[data="+result+"]").remove();
								getLastComments();
							});
						});
					<?php endif; ?>
				}
			});
		}
		$(function(){
			<?php if(isset($_SESSION['pseudo'])): ?>
				$("#sendComment").on("click", function(){
					$.ajax("sendComment.php", {method:'post', data:{'id': <?= $postId?>, 'content':$("#commentContent").val()}}).done(function(result){
						$("#commentContent").val('');
						getLastComments();
					});
				});
			<?php endif; ?>
			$("#updateComments").on("click", function(){
				getLastComments();
			});
			getLastComments();
		});
		</script>
	<?php endif; ?>
	<footer class="base">
		
	</footer>
</body>
</html>