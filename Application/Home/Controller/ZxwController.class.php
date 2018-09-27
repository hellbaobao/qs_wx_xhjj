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

    public function hotlist() {
        $key = $_GET['key'];
        $this->assign('key', $key);
        $this->assign('data', $data);
        $this->display();
    }

    public function sylist() {
        $key = $_GET['key'];
        $this->assign('key', $key);
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
                    'datetime' => array('li .txt-box .s-p .s2', 't'),
                ))->data;

        $returnData['ajaxLoad'] = '点击加载更多';
        $returnData['is_end'] = 0;

        if (empty($noticeArr)) {
            $returnData['flag'] = 0;
        } else {
            for ($i = 0; $i < count($noticeArr); $i++) {
                $noticeArr[$i]['id'] = ($page - 1) * 20 + $i + 1;
                $noticeArr[$i]['datetime'] = tranTime(date('Y-m-d H:i:s', $noticeArr[$i]['datetime']));
            }
            $returnData['page'] = $_POST['page'];

            $returnData['flag'] = 1;
            $returnData['data'] = $noticeArr;
        }
        $this->ajaxReturn($returnData);
    }

    public function hottop() {
        header("content-type:text/html;charset=utf-8");
        $data = QueryList::Query("http://weixin.sogou.com/", array(
                    'title' => array('.snb-right .aside ol li a', 'text'),
                    'hot' => array('.snb-right .aside ol li .lan-line span', 'style'),
                ))->data;
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['hot'] = substr($data[$i]['hot'], 6);
        }
//        dump($data);
        $this->assign('list', $data);
        $this->assign('date', date("Y年m月d日"));
        $this->display();
    }

    public function getHotList() {
        $key = $_POST['key'];
        $page = $_POST['page'];
        header("content-type:text/html;charset=utf-8");
        $noticeArr = QueryList::Query("http://weixin.sogou.com/weixin?query=" . $key . "&s_from=hotnews&type=2&page=" . $page . "&ie=utf8", array(
                    'title' => array('.news-list li .txt-box h3 a', 'text'),
                    'info' => array('.news-list li .txt-box .txt-info', 'text'),
                    'img' => array('.news-list li .img-box a img', 'src'),
                    'href' => array('.news-list li .img-box a', 'href'),
                    'author' => array('.news-list li .txt-box .s-p .account', 'text'),
                    'author_link' => array('.news-list li .txt-box .s-p .account', 'href'),
                    'datetime' => array('.news-list li .txt-box .s-p .s2', 'html'),
                ))->data;

        $returnData['ajaxLoad'] = '点击加载更多';
        $returnData['is_end'] = 0;

        if (empty($noticeArr)) {
            $returnData['flag'] = 0;
        } else {
            for ($i = 0; $i < count($noticeArr); $i++) {
                $noticeArr[$i]['id'] = ($page - 1) * 10 + $i + 1;
                $time = explode("'", $noticeArr[$i]['datetime']);
                $noticeArr[$i]['datetime'] = tranTime(date('Y-m-d H:i:s', $time[1]));
            }

//            dump($noticeArr);
            $returnData['page'] = $_POST['page'];

            $returnData['flag'] = 1;
            $returnData['data'] = $noticeArr;
        }
        $this->ajaxReturn($returnData);
    }

    public function index1() {
        header("content-type:text/html;charset=utf-8");
        $data = QueryList::Query("http://mp.weixin.qq.com/profile?src=3&timestamp=1537929019&ver=1&signature=OGvML1uTg5kbgfBq-agP-VTNqy0EbXen-YS169hnjYAMdaCRBQ4xFfrb5tdcDDft5dLdmflyH*b7YTHXm*Q4zg==", array(
                    'title' => array('.page_profile_info .page_profile_info_inner .profile_info_area .profile_info_group .profile_info strong', 'text'),
                    'account' => array('.page_profile_info .page_profile_info_inner .profile_info_area .profile_info_group .profile_info p', 'text'),
                    'img' => array('.page_profile_info .page_profile_info_inner .profile_info_area .profile_info_group .profile_avatar img', 'src'),
                ))->data;
        dump($data);
    }

    public function ylindex() {
        $url = "http://www.92yilin.com/";
        $reg = array(
            'title' => array('.booklist td a', 'text', 'strong'),
            'href' => array('.booklist td a', 'href'),
        );
        $data = QueryList::Query($url, $reg, '', 'utf-8', 'gb2312', TRUE)->data;

        $this->assign('data', $data);
        $this->display();
    }

    public function yllist() {
        $key = $_GET['key'];
        $url = "http://www.92yilin.com/" . $key;
        $keyArr = explode('/', $key);
        $reg = array(
            'title' => array('.maglisttitle a', 'text'),
            'href' => array('.maglisttitle a', 'href'),
            'img' => array('.sidebarBlock .center img', 'src'),
        );
        $data = QueryList::Query($url, $reg, '', 'utf-8', 'utf-8', TRUE)->data;

        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['href'] = $keyArr[0] . "/" . $data[$i]['href'];
        }

        $this->assign('data', $data);
        $this->assign('date', $keyArr[0] );
        $this->display();
    }

    public function yldetail() {
        $key = $_GET['key'];
        $url = "http://www.92yilin.com/" . $key;
        $reg = array(
            'title' => array('.blkContainerSblk  h1', 'text'),
            'author' => array('#pub_date', 'text'),
            'from' => array('#media_name', 'text'),
            'content' => array('.blkContainerSblkCon', 'html', '-.contentAd'),
        );
        $data = QueryList::Query($url, $reg, '', 'utf-8', 'utf-8', TRUE)->data;
        
        $this->assign('data', $data[0]);
        $this->display();

    }

}
