<?php
if (!defined('IN')) {
    die('bad request');
}

include_once AROOT . 'controller' . DS . 'app.class.php';

class resourceController extends appController
{

    public function person()
    {
        $page_idx = v('page_idx', 1);
        $page_size = 50;
        $data['title'] = $data['top_title'] = '人物搜索';
        $data['person_count'] = get_person_count();
        $data['person_list'] = get_person_list($page_idx, $page_size);
        $data['page_idx'] = $page_idx;
        $data['page_size'] = $page_size;
        render($data);
    }

    public function author()
    {
        $page_idx = v('page_idx', 1);
        $page_size = 50;

        $data['title'] = $data['top_title'] = '作者搜索';
        $data['author_count'] = get_author_count(v('q'));
        $data['author_list'] = get_author_list(v('q'), $page_idx, $page_size);
        $data['page_idx'] = $page_idx;
        $data['page_size'] = $page_size;
        render($data);
    }

    public function scenario()
    {
        $page_idx = v('page_idx', 1);
        $page_size = 50;
        $data['title'] = $data['top_title'] = '场景及其他';
        $data['resource_count'] = get_resource_count(v('q'));
        $data['resource_list'] = get_resource_list(v('q'), $page_idx, $page_size);
        $data['page_idx'] = $page_idx;
        $data['page_size'] = $page_size;
        render($data);
    }
    public function figure()
    {
        $page_idx = v('page_idx', 1);
        $page_size = 50;
        $data['title'] = $data['top_title'] = '同人图';
        $data['figure_count'] = get_figure_count(v('q'));
        $data['figure_list'] = get_figure_list(v('q'), $page_idx, $page_size);
        $data['page_idx'] = $page_idx;
        $data['page_size'] = $page_size;
        render($data);
    }

    public function ftg()
    {
        $data['title'] = $data['top_title'] = '格斗作品';
        render($data);
    }

    public function __construct()
    {
        parent::__construct();
    }
}
