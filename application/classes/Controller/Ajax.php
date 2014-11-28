<?php defined('SYSPATH') or die('No direct script access');
class Controller_Ajax extends Controller {

	private function sendBack($data)
	{
		$this->response->headers('Content-type', 'application/json');
		$this->response->body(json_encode($data));
	}
	public function before()
	{
		parent::before();
		session_start();
	}
	public function action_getlastcomments()
	{
		if(isset($_POST['id']) && isset($_POST['last_id']))
		{
			$commentManager = new Model_CommentManager();
			$comments =$commentManager->getLastComments($_POST['id'], $_POST['last_id']);
			$this->sendBack($comments);
		}
	}
	public function action_deletepost()
	{
		if(isset($_SESSION['isAdmin']))
		{
			if(isset($_GET['id']))
			{
				$options = new Model_BlogOptions();
				$postsPerPage = (int)$options->get('posts_per_page');
				$postManager = new Model_PostManager($postsPerPage);
				$postManager->deletePost($_GET['id']);
				$this->sendBack($_GET['id']);
			}
		}
	}
	public function action_getpost()
	{
		if(isset($_SESSION['isAdmin']))
		{
			if(isset($_GET['id']))
			{
				$options = new Model_BlogOptions();
				$postsPerPage = (int)$options->get('posts_per_page');
				$postManager = new Model_PostManager($postsPerPage);
				$postManager->loadPost($_GET['id']);
				if($postManager->havePosts())
				{
					$this->sendBack($postManager->getNextPost());
				}
				else
				{
					$this->sendBack('');
				}
			}
			else
			{
				$this->sendBack('');
			}
		}
		else
		{
			$this->sendBack('');
		}
	}

	public function action_gettags()
	{
		if(isset($_SESSION['isAdmin']))
		{
			if(isset($_GET['id']))
			{
				$tagManager = new Model_TagManager();
				$result = $tagManager->getTags($_GET['id']);
				$this->sendBack($result);
			}
		}
	}
	public function action_sendtag()
	{
		if(isset($_SESSION['isAdmin']))
		{
			if(isset($_GET['name']))
			{
				$tagManager = new Model_TagManager();
				$result = $tagManager->addTag($_GET['name']);
				if($result)
				{
					$this->sendBack($_GET['name']);
				}
				else
				{
					$this->sendBack(null);
				}
			}
		}
	}
	public function action_sendpost()
	{
		if(isset($_SESSION['isAdmin']))
		{
			if(isset($_POST['content']) && isset($_POST['title']) && strlen($_POST['title']) > 0)
			{
				$options = new Model_BlogOptions();
				$postsPerPage = (int)$options->get('posts_per_page');
				$postManager = new Model_PostManager($postsPerPage);
				
				if(isset($_GET['id']))
				{
					$postManager->UpdatePost($_GET['id'], $_POST['title'], $_POST['content']);
					$this->sendBack('Post modifié');
				}
				else
				{
					$postId = $postManager->AddPost($_POST['title'], $_POST['content'], $_SESSION['user_id']);
					$result = array('message'=>'Post créé', 'postID'=>$postId);
					$this->sendBack($result);
				}
			}
			else
			{
				$this->sendBack('Titre manquant');
			}
		}
	}
	public function action_edittagrelationship()
	{
		if(isset($_SESSION['isAdmin']))
		{
			if(isset($_POST['tags']) && isset($_GET['id']))
			{
				$tagManager = new Model_TagManager();
				$tags = json_decode($_POST['tags']);
				if(array_key_exists('toAdd', $tags))
				{
					foreach ($tags->toAdd as $value) {
						$tagManager->addTagRelationship($value, $_GET['id']);
					}
				}
				if(array_key_exists('toDelete', $tags))
				{
					foreach ($tags->toDelete as $value) {
						$tagManager->deleteTagRelationship($value, $_GET['id']);
					}
				}
				$this->sendBack('finished');
			}
			else
			{
				$this->sendBack('error');
			}
		}
		else
		{
			$this->sendBack('not admin');
		}
	}
	public function action_changetemplate()
	{
		if(isset($_SESSION['isAdmin']))
		{
			if(isset($_GET['templateName']))
			{
				$options = new Model_BlogOptions();
				$options->set('current_template', $_GET['templateName']);
			}
		}
	}
	public function action_uploadimage()
	{
		if(isset($_FILES['file']))
		{
			$file = $_FILES['file'];
			if($file['error'] == 0)
			{
				$allowedType = array('image/png', 'image/jpeg', 'image/jpg', 'image/gif');
				$formats = array('.png', '.jpeg', '.jpg', '.gif');
				$formatId = array_search($file['type'], $allowedType);
				if($formatId !== false && $formatId < count($formats))
				{
					$fileName = uniqid().$formats[$formatId];
					move_uploaded_file($file['tmp_name'], 'assets/images/posts/'.$fileName);
					$this->sendBack($fileName);
				}
				else
				{
					error_log("format d'image non supporte : ".$file['type']);
					$this->sendBack('error');
				}
			}
			else
			{
				error_log("une erreur est survenu lors de l'envoi du fichier erreur No : ".$file['error']);
				$this->sendBack('error');
			}
		}
		else
		{
			error_log("aucun fichier envoyer");
			$this->sendBack('error');
		}
	}
}