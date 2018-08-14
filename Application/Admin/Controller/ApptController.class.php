<?php

/**
 * @name ApptController
 * @info 描述：预约管理操作控制器
 * @author Hellbao <1036157505@qq.com>
 * @datetime 2018-08-09 14:57:46
 */

namespace Admin\Controller;

use Think\Controller;

class ApptController extends BaseDBController {

    /**
     * -------------------------------------------------------------------------
     * 前台接口
     * -------------------------------------------------------------------------
     */
    public function addVisitDate() {
        $this->display();
    }

    /**
     * -------------------------------------------------------------------------
     * 数据接口
     * -------------------------------------------------------------------------
     */
    public function setCloseVisitDate() {
        $yy = $_POST['yy'];
        $mm = $_POST['mm'];
        $dd = $_POST['dd'];
        $date = strtotime($yy . '-' . $mm . '-' . $dd);
        $date = date('Y-m-d', $date);
        $flag = M('appt_visit_close')->add(array('close_time' => $date));
        if ($flag > 0) {
            $return['flag'] = 1;
        } else {
            $return['flag'] = 0;
            $return['msg'] = "数据插入失败！";
        }
        $this->ajaxReturn($return, 'JSON');
    }

    public function delCloseVisitDate() {
        $yy = $_POST['yy'];
        $mm = $_POST['mm'];
        $dd = $_POST['dd'];
        $date = strtotime($yy . '-' . $mm . '-' . $dd);
        $date = date('Y-m-d', $date);
        $flag = M('appt_visit_close')->where(array('close_time' => $date))->delete();
        if ($flag > 0) {
            $return['flag'] = 1;
        } else {
            $return['flag'] = 0;
            $return['msg'] = "数据删除失败！";
        }
        $this->ajaxReturn($return, 'JSON');
    }

    public function getDateVisitList() {
        $yy = $_POST['yy'];
        $mm = $_POST['mm'];
        $dd = $_POST['dd'];

        $date = date('Y-m-d', strtotime($yy . '-' . $mm . '-' . $dd));
        $visitStatus = $this->getIsCloseVisit($date);
        $visitCount = M('appt_visit_info')->where(array('appt_time' => $date))->count();
        $visitList = M('appt_visit_info')->field('*,sum(appt_num) as sum_num')->where(array('appt_time' => $date))->group('id')->select();
        $visitSum = M('appt_visit_info')->field('sum(appt_num) as sum_num')->where(array('appt_time' => $date))->select();
        if ($visitCount != 0) {
            $return['status'] = $visitStatus;
            $return['count'] = $visitCount;
            $return['sum'] = $visitSum[0]['sum_num'];
            $return['list'] = $visitList;
        } else {
            $return['status'] = $visitStatus;
            $return['count'] = 0;
            $return['sum'] = 0;
            $return['list'] = array();
        }
        $this->ajaxReturn($return, 'JSON');
    }

    /**
     * -------------------------------------------------------------------------
     * 内部接口
     * -------------------------------------------------------------------------
     */
    public function getIsCloseVisit($date) {
        $flag = M('appt_visit_close')->where(['close_time' => $date])->count();
        if ($flag != 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
