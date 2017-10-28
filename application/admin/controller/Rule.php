<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4
 * Time: 23:58
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model;

/**
 * 后台权限管理
 * @author by king
 */
class Rule extends Adminbase
{
    /**
     * 权限列表
     * @author by king
     */
    public function rule_list()
    {
        $data = Db::name('auth_rule')->getTreeData('tree', 'id', 'title');
         // dump($data);exit;
        $this->assign('data', $data);
        $this->assign('media', ['home' => '首页', 'index' => '权限管理', 'child' => '权限列表']);
        return $this->fetch();
    }

    /**
     * 添加权限
     * @author by king
     */
    public function add_rule()
    {
        if ($this->request->isPost()) {
            $data = input('post.');
            $data['name'] = trim($data['name']);
            try{
                $result = Db::name('auth_rule')->insert($data);
            }catch(\Exception $e){
                exit(json_encode(['status'=>-1,'msg'=>'添加失败']));
            }
            if ($result) {
                exit(json_encode(['status'=>1,'msg'=>'添加成功']));
            } else {
                exit(json_encode(['status'=>-1,'msg'=>'添加失败']));
            }
        }
        $id = input('id');
        $this->assign('id',$id);
        $this->assign('media', ['home' => '首页', 'index' => '权限管理', 'child' => '添加权限']);
        return $this->fetch();
    }

    /**
     * 修改权限
     * @author by king
     */
    public function edit($id)
    {
        if ($this->request->isPost()) {
            $data = input('post.');
            $info = ['title' => $data['title'], 'name' => $data['name']];
            $result = Db::name('auth_rule')->where(["id" => $data['id']])->update($info);
            if ($result) {
                exit(json_encode(['status'=>1,'msg'=>'修改成功']));
            } else {
                exit(json_encode(['status'=>1,'msg'=>'修改失败']));
            }
        }
        $rule = Db::name('auth_rule')->where(['id'=>$id])->find();
        $this->assign('rule',$rule);
        $this->assign('media', ['home' => '首页', 'index' => '权限管理', 'child' => '修改权限']);
        return $this->fetch();
    }

    /**
     * 删除权限
     * @author by king
     */
    public function delete($id)
    {
        if (empty($id)) return false;
        $map = ['id' => $id];
        $authModel = new model\Auth();
        $res = $authModel->getChild($id); //获取子级权限
        if (!empty($res)) {
            exit(json_encode(['status'=>-1,'msg'=>'请先删除子权限']));
        } else {
            $result = Db::name('auth_rule')->delete($map);
            if ($result) {
                exit(json_encode(['status'=>1,'msg'=>'删除成功']));
            } else {
                exit(json_encode(['status'=>-1,'msg'=>'删除失败']));
            }
        }
    }

    /**
     * 角色列表
     * @author by king
     */

    public function rule_group()
    {
        $data = Db::name('auth_group')->select();
        $this->assign('data', $data);
        $this->assign('media', ['home' => '首页', 'index' => '角色管理', 'child' => '角色列表']);
        return $this->fetch();
    }

    /**
     * 添加角色
     * @author by king
     */
    public function add_group()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $result = Db::name('auth_group')->insert($data);
            if ($result) {
                exit(json_encode(['status'=>1,'msg'=>'添加成功']));
            } else {
                exit(json_encode(['status'=>-1,'msg'=>'添加失败']));
            }
        }
        $this->assign('media', ['home' => '首页', 'index' => '角色管理', 'child' => '添加角色']);
        return $this->fetch();
    }

    /**
     * 修改角色
     * @author by king
     */
    public function edit_group($id)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $result = Db::name('auth_group')->where(["id" => $data['id']])->update(['title' => $data['title']]);
            if ($result) {
                exit(json_encode(['status'=>1,'msg'=>'修改成功']));
            } else {
                exit(json_encode(['status'=>-1,'msg'=>'修改失败']));
            }
        }
        $rule = Db::name('auth_group')->where(['id'=>$id])->find();
        $this->assign('rule',$rule);
        $this->assign('media', ['home' => '首页', 'index' => '角色管理', 'child' => '更新角色']);
        return $this->fetch();
    }

    /**
     * 删除角色
     * @author by king
     */
    public function delete_group($id)
    {
        if ($id == 1) {
            exit(json_encode(['status'=>-1,'msg'=>'该分组不能被删除']));
        }
        $map = ['id' => $id];
        $result = Db::name('auth_group')->where($map)->delete();
        if ($result) {
            exit(json_encode(['status'=>1,'msg'=>'删除成功']));
        } else {
            exit(json_encode(['status'=>-1,'msg'=>'删除失败']));
        }
    }

    /**
     * 分配权限
     * @author by king
     */
    public function rule_distribution($id)
    {
        if ($this->request->post()) {
            $data = input('post.');
            $datas['rules'] = implode(',', $data['rule_ids']);
            $result = Db::name('auth_group')->where(['id' => $data['id']])->update($datas);
            if ($result) {
                $this->success('操作成功', 'Admin/Rule/rule_group');
            } else {
                $this->error('操作失败');
            }
        } else {
            $group_data = Db::name('auth_group')->where(['id' => $id])->find();
            $group_data['rules'] = explode(',', $group_data['rules']);
            // 获取规则数据
            $rule_data = Db::name('auth_rule')->getTreeData('level', 'id', 'title');
            $assign = array(
                'group_data' => $group_data,
                'rule_data' => $rule_data
            );
            $this->assign('media', ['home' => '首页', 'index' => '角色管理', 'child' => '分配权限']);
            $this->assign($assign);
            return $this->fetch();
        }
    }
}











