<?php

/**
 * @name ApptlearnController
 * @info 描述：通知信息控制器
 * @author Hellbao <1036157505@qq.com>
 * @datetime 2017-2-7 15:07:13
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Config;

class ApptlearnController extends BaseDBController {

    protected $infoModel;
    protected $attachModel;

    public function _initialize() {
        parent::_initialize();

        $this->infoModel = D('ApptLearnInfo');
        $this->attachModel = D('SysAllAttach');
    }

    /**
     * function:显示通知信息列表
     */
    public function showList() {
        if (!empty($_GET['title'])) {
            $where['title'] = array('LIKE', '%' . urldecode($_GET['title']) . '%');
            $pageCondition['title'] = urldecode($_GET['title']);
        }
        $fieldStr = parent::madField('appt_learn_info.*', 'appt_learn_info.*') . ',' . parent::madField('sys_user_info.usr', 'sys_user_info.realname');
        $joinStr = parent::madJoin('appt_learn_info.user_id', 'sys_user_info.id');
        $page = getPage(M('appt_learn_info'), $where, $pageCondition, C('PAGE_SIZE'));
        if ($order != null) {
            $infoList = M('appt_learn_info')->join($joinStr)->field($fieldStr)->where($where)->order($order)->limit($page->firstRow . ',' . $page->listRows)->select();
        } else {
            $infoList = M('appt_learn_info')->join($joinStr)->field($fieldStr)->where($where)->order('id desc')->limit($page->firstRow . ',' . $page->listRows)->select();
        }
        $page = $page->show();
        $this->assign('page', $page);
        $this->assign('searchInfo', $pageCondition);
        for ($i = 0; $i < count($infoList); $i++) {
            $sum = M('appt_learn_order')->field('sum(appt_num) as appt_num')->where('learn_id=' . $infoList[$i]['id'])->select();
            $infoList[$i]['appt_num'] = $sum[0]['appt_num'] == null ? 0 : $sum[0]['appt_num'];
        }

//        dump($infoList);
        $this->assign('infoList', $infoList);
        $this->display();
    }

    /**
     * function:跳转添加页面
     */
    public function add() {
        $this->display();
    }

    /**
     * function:编辑通知信息
     */
    public function edit() {
        $returnData = parent::getData($this->infoModel, $_GET['id']);
        if ($returnData['code'] == '500') {
            $condition['module_info_id'] = array('EQ', $returnData['data']['id']);
            $condition['module_name'] = array('EQ', 'apptlearn');
            $attachList = $this->attachModel->where($condition)->select(); //if(is_array($res) && count($res)>0)
            $this->assign('attachList', json_encode($attachList));
            $this->assign('apptlearnInfo', $returnData['data']);
        } else {
            $this->assign();
        }
        $this->display('add');
    }

    /**
     * function:保存通知信息
     * @return $returnData(501验证未通过 500添加成功 502添加失败)
     */
    public function saveApptlearnInfo() {
        $param_arr = array();
        $form_data = $_POST['form_data'];
        parse_str($form_data, $param_arr); //转换数组
        $param_arr['user_id'] = $_SESSION['user_id'];
        $param_arr['read_ids'] = ',';
        $returnData = parent::saveData($this->infoModel, $param_arr);
        if ($returnData['code'] == '500') {
            foreach ($param_arr['files'] as $value) {
                $condition['id'] = array('EQ', $value);
                if ($returnData['flag'] == 'add') {
                    $data = array('module_info_id' => $returnData['dataID']);
                } else {
                    $data = array('module_info_id' => $param_arr['id']);
                }
                $this->attachModel->where($condition)->setField($data);
            }
            $logC = A('Actionlog')->addLog('ApptlearnInfo', 'saveApptlearnInfo', '添加/编辑通知信息');
        }
        $this->ajaxReturn($returnData, 'JSON');
    }

    /**
     * function:删除单条数据
     * @param $id
     * @return bool
     */
    public function delApptlearnInfo($id) {
        $successFlag = true;
        $returnData = parent::delData($this->infoModel, $id);
        if ($returnData['code'] == '502') {
            $successFlag = fasle;
        }
        return $successFlag;
    }

    /**
     * function:批量删除数据
     */
    public function delArrayInfo() {
        $returnData['code'] = '500';
        $idArray = explode(',', rtrim($_POST['ids'], ","));
        foreach ($idArray as $value) {
            if (!$this->delApptlearnInfo($value)) {
                $returnData['code'] = '502';
            }
        }
        $logC = A('Actionlog')->addLog('ApptlearnInfo', 'delArrayInfo', '删除通知信息');
        $this->ajaxReturn($returnData, 'JSON');
    }

    /**
     * function:发布
     */
    public function publApptlearnInfo() {
        $condition['id'] = array('EQ', $_POST['id']);
        $data = array('is_publish' => '1');
        $result = $this->infoModel->where($condition)->setField($data);
        if ($result !== false) {
            $returnData['code'] = '500';
            $logC = A('Actionlog')->addLog('ApptlearnInfo', 'publApptlearnInfo', '发布通知信息');
        } else {
            $returnData['code'] = '502';
        }
        $this->ajaxReturn($returnData, 'JSON');
    }

    /**
     * function:通知详情
     */
    public function apptlearnDetail() {
        $returnData = parent::getData($this->infoModel, $_GET['id']);
        $sysUserInfo = D('SysUserInfo')->where(array('id' => $returnData['data']['user_id']))->find();
        $returnData['data']['usr'] = (!empty($sysUserInfo['realname']) ? $sysUserInfo['realname'] : $sysUserInfo['usr']);


        $condition['module_info_id'] = $returnData['data']['id'];
        $condition['module_name'] = array('EQ', 'apptlearn');
        $imgInfoList = $this->attachModel->where($condition)->order('id desc')->select();
        $this->assign('imgInfo', $imgInfoList);


        $this->assign('apptlearn', $returnData['data']);
        $this->display();
    }

    public function getOrderList() {
        $id = $_POST['id'];
        $list = M('appt_learn_order')->where('learn_id=' . $id)->select();
        $this->ajaxReturn($list, 'JSON');
    }

}
