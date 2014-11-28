<?php defined('SYSPATH') or die('No direct script access');
class Controller_Posts extends Controller {

	private $options;
	private $templateName;
	private $postsPerPage;
	private $postManager;
	private $commentManager;
	private $tagManager;
	private $page = 0;
	private $postId = null;

	function before()
	{
		parent::before();
		$this->options = new Model_BlogOptions();
		$this->templateName = $this->options->get('current_template');
		$this->postsPerPage = (int)$this->options->get('posts_per_page');
		$this->postManager = new Model_PostManager($this->postsPerPage);
		$this->commentManager = new Model_CommentManager();
		$this->tagManager = new Model_TagManager();
		session_start();
		//loggin header
	}

	public function action_page()
	{
		$this->page = $this->request->param('id', 1);
		$this->postManager->loadPosts($this->page-1);
		$this->postId = null;
		$this->show();
	}

	public function action_id()
	{
		$this->postManager->loadPost($this->request->param('id'));
		$this->postId = $this->request->param('id');
		$this->show();
	}
	public function action_tag()
	{
		$page = 0;
		if(isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
		$this->postId = null;
		$tag = $this->request->param('id');
		$this->postManager->loadPosts($page, $tag);
		$this->show();
	}

	private function show()
	{
		$view = View::factory('templates/'.$this->templateName.'/body');
		
		$loginString = '<p>';
		if(isset($_SESSION['pseudo']))
		{
			if(isset($_SESSION['isAdmin']))
			{
				$loginString .= 'Admin ';
			}
			$loginString .= 'logged as '.$_SESSION['pseudo'].' |';
			$loginString .= ' <a href="'.URL::base().'user/disconnect">Déconnexion</a>';
		}
		else
		{
			$loginString .= '<p><a href="'.URL::base().'user/login">Connexion</a> | <a href="'.URL::base().'user/register">Register</a></p>';
		}
		$loginString .= '</p>';

		$view->loginString = $loginString;
		$view->templateName = $this->templateName;
		$view->options = $this->options;
		$view->postManager = $this->postManager;
		$view->tagManager = $this->tagManager;
		$view->commentManager = $this->commentManager;
		$view->postId = $this->postId;

		$this->response->body($view);
	}

}

