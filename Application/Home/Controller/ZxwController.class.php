<?php

/**
 * @name zxw
 * @info 描述：控制器
 * @author Hellbao <1036157505@qq.com>
 * @datetime 2017-3-2 11:23:30
 */

namespace Home\Controller;

use Think\Controller;
use QL\QueryList;

header('Access-Control-Allow-Origin:*');  //支持全域名访问，不安全，部署后需要固定限制为客户端网址
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); //支持的http 动作
header('Access-Control-Allow-Headers:x-requested-with,content-type');  //响应头 请按照自己需求添加。

class ZxwController extends Controller {

    public function index() {
        $this->display();
    }

    public function wxlist() {
        $key = $_GET['key'];
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 获取列表
     */
    public function getList() {
        $key = $_POST['key'];
        $page = $_POST['page'];


        header("content-type:text/html;charset=utf-8");
        $noticeArr = QueryList::Query("http://weixin.sogou.com/pcindex/pc/pc_" . $key . "/" . $page . ".html", array(
                    'title' => array('li .txt-box h3 a', 'text'),
                    'info' => array('li .txt-box .txt-info', 'text'),
                    'img' => array('li .img-box a img', 'src'),
                    'href' => array('li .img-box a', 'href'),
                    'author' => array('li .txt-box .s-p .account', 'text'),
                    'author_link' => array('li .txt-box .s-p .account', 'href'),
                ))->data;
        
        $returnData['ajaxLoad'] = '点击加载更多';
        $returnData['is_end'] = 0;

        if (empty($noticeArr)) {
            $returnData['flag'] = 0;
        } else {
            $returnData['page'] = $_POST['page'];

            $returnData['flag'] = 1;
            $returnData['data'] = $noticeArr;
        }
        $returnData['sql'] = M('NoticeInfo')->getLastSql();
        $this->ajaxReturn($returnData);
    }

}
