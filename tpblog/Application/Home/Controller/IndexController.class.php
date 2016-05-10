<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    var $article;
    var $category;
    
    public function __construct()
    {
        parent::__construct();
        $this->article = M("Article");
        $this->category = M("Category");
    }
    
    //首页
    public function index()
    {
        $articles = $this->article->select();
        foreach($articles as &$a){
            $a["category"] = $this->category->find($a['category_id']);
        }
        $this->assign("articles", $articles);
        $this->display();
    }
    
    public function destroy()
    {
        $id = I("get.id");
        $this->article->delete($id);
        // echo $this->article->getLastSql();
        $this->success("恭喜您删除成功！");
    }
    
    public function create()
    {
        $categories = $this->category->select();
        $this->assign("categories", $categories);
        $this->display();
    }
    
    public function store()
    {
        //获取表单的值
        $this->article->create();
        $this->article->time = time();
        
        //插入数据库
        $this->article->add();
        $this->success("恭喜您发布成功", U("index"));
    }
    
    public function show()
    {
        $id = I("get.id");
        $article = $this->article->find($id);
        // $this->assign("")
    }
    
    public function edit()
    {
        $id = I("get.id");
        $article = $this->article->find($id);
        $this->assign("article", $article);
        $this->display();
    }
    
    public function update()
    {
        $this->article->create();
        $this->article->save();
        $this->success("修改成功", U('index'));
    }
}
