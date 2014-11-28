<?php defined('SYSPATH') or die('No direct script access');
class Controller_User extends Controller {

	public function action_disconnect()
	{
		session_start();
		session_destroy();
		$this->redirect($this->request->referrer());
	}
	public function action_login()
	{
		session_start();
		$error = '';
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			if(ctype_alnum($_POST['username']))
			{
				$userManager = new Model_UserManager();
				$user = $userManager->LogUser($_POST['username'], $_POST['password']);
				if($user)
				{
					$_SESSION['user_id'] = $user['user_id'];
					$_SESSION['pseudo'] = $user['pseudo'];
					if($user['isAdmin'] == '1')
					{
						$_SESSION['isAdmin'] = 1;
					}
					$this->redirect($_POST['referer']);
				}
				else
				{
					$referer = $_POST['referer'];
					$error = '<p class="error">Nom d\'utilisateur ou mot de passe incorect</p>';
					
					$view = View::factory('loginform');
					$view->error = $error;
					$view->referer = $referer;
					$this->response->body($view);
				}
			}
			else
			{
				$referer = $_POST['referer'];
				$error = '<p class="error">Nom d\'utilisateur ne doit contenir que des caractère alpha numérique</p>';

				$view = View::factory('loginform');
				$view->error = $error;
				$view->referer = $referer;
				$this->response->body($view);
			}
		}
		else
		{
			if(isset($_GET['referer']))
			{
				$referer = $_GET['referer'];
			}
			else if(isset($_SERVER['HTTP_REFERER']))
			{
				$referer = $_SERVER['HTTP_REFERER'];
			}
			else
			{
				$referer = 'posts/page/0';
			}
			$view = View::factory('loginform');
			$view->error = $error;
			$view->referer = $referer;
			$this->response->body($view);
		}
	}
	public function action_register()
	{
		session_start();
		$error = '';
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['pseudo']) && isset($_POST['email']))
		{
			if(strlen($_POST['username']) > 0 && ctype_alnum($_POST['username']) && ctype_alnum($_POST['pseudo']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			{
				$userManager = new Model_UserManager();
				if($userManager->userExist($_POST['username'], $_POST['pseudo']) == null)
				{
					$id = $userManager->RegisterUser($_POST['username'], $_POST['password'], $_POST['pseudo'], $_POST['email']);
				
					$_SESSION['user_id'] = $id;
					$_SESSION['pseudo'] = $_POST['pseudo'];
					header('Location:'.$_POST['referer']);
				}
				else
				{
					$referer = $_POST['referer'];
					$error = '<p class="error">Nom d\'utilisateur déjà utilisé</p>';
					
					$view = View::factory('registerform');
					$view->error = $error;
					$view->referer = $referer;
					$this->response->body($view);
				}
			}
			else
			{
				$referer = $_POST['referer'];
				$error = '<p class="error">Nom d\'utilisateur et le pseudo ne doivent contenir que des caractère alpha numérique, l\'email doit être au bon format</p>';
				
				$view = View::factory('registerform');
				$view->error = $error;
				$view->referer = $referer;
				$this->response->body($view);
			}
		}
		else
		{
			if(isset($_SERVER['HTTP_REFERER']))
			{
				$referer = $_SERVER['HTTP_REFERER'];
			}
			else
			{
				$referer = 'posts/page/0';
			}
			$view = View::factory('registerform');
			$view->error = $error;
			$view->referer = $referer;
			$this->response->body($view);
		}
	}
}