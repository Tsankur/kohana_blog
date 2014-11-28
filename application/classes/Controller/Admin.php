<?php defined('SYSPATH') or die('No direct script access');
class Controller_Admin extends Controller {

	public function action_main()
	{
		session_start();
		if(!isset($_SESSION['isAdmin']))
		{
			if(!isset($_SESSION['pseudo']))
			{
				$this->redirect('user/login?referer=admin/main');
			}
			else
			{
				$this->redirect('posts/page/1');
			}
		}
		else
		{
			$options = new Model_BlogOptions();
			$templateName = $options->get('current_template');
			$loginString = '<p>Admin logged as '.$_SESSION['pseudo'].' | <a href="'.URL::base().'user/disconnect">Déconnexion</a></p>';

			//images
			$images = scandir('assets/images/posts/', 0);
			$imagesString = '';
			for ($i=2; $i < count($images); $i++)
			{ 
				$imagesString .= '<img src="'.URL::base().'assets/images/posts/'.$images[$i].'"/>';
			}
			//templates
			$templates = scandir('assets/images/templates', 0);
			$templatesString = '';
			for ($i=2; $i < count($templates); $i++)
			{
				$templatesString .= '<div class="template'.($templateName == $templates[$i]?' selected':'').'"><p>'.$templates[$i].'</p> <img src="'.URL::base().'assets/images/templates/'.$templates[$i].'/screenshot.png"/></div>';
			}
			//users
			$userManager = new Model_UserManager();
			$users = $userManager->GetUsers();
			$usersString = '';
			for ($i=0; $i < count($users); $i++)
			{
				$usersString .= '<tr><td>'.$users[$i]['user_name'].'</td><td>'.$users[$i]['pseudo'].'</td><td>'.$users[$i]['email'].'</td><td>'.($users[$i]['isAdmin']?'oui':'non').'</td></tr>';
			}
			//posts editor
			$postsPerPage = (int)$options->get('posts_per_page');
			$postManager = new Model_PostManager($postsPerPage);
			
			$postId = $this->request->param('id',0);
			$posts = $postManager->getPosts();
			$postsString = '';
			for ($i=0; $i < count($posts); $i++)
			{
				$postsString .= '<tr data_id="'.$posts[$i]['id'].'"><td>'.$posts[$i]['id'].'</td><td>'.$posts[$i]['title'].'</td><td>'.$posts[$i]['pseudo'].'</td><td>'.$posts[$i]['date'].'</td><td><button class="edit" type="button" data="'.$posts[$i]['id'].'">Edit</button></td><td><button class="delete" type="button" data="'.$posts[$i]['id'].'">X</button></td></tr>';
			}
			//tags
			$tagManager = new Model_TagManager();
			$tags = $tagManager->GetTags();
			$tagsString = '';
			for ($i=0; $i < count($tags); $i++)
			{
				$tagsString .= '<a class="tag">'.$tags[$i]['name'].' </a>';
			}
			$view = View::factory('admin');
			$view->postId = $postId;
			$view->loginString = $loginString;
			$view->imagesString = $imagesString;
			$view->postsString = $postsString;
			$view->usersString = $usersString;
			$view->templatesString = $templatesString;

			$view->tagsString = $tagsString;
			$this->response->body($view);
		}
	}
}