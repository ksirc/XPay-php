<?php

class Pay
{
    private $create_time;
    private $custom;        //自定义金额
    private $device;        //设备
    private $email;         //邮箱
    private $info;          //备注
    private $mobile;        //移动设备
    private $money;         //金额
    private $nick_name;      //昵称
    private $server_list;       //区服
    private $pay_type;      //支付类型
    private $state;         //显示状态 0待审核 1确认显示 2驳回 3通过不展示 4已扫码
    private $test_email;
    private $update_time;
    private $pay_num;
    private $pay_id;

    /**
     * @return mixed
     */
    public function getPayId()
    {
        return $this->pay_id;
    }

    /**
     * @param mixed $pay_id
     */
    public function setPayId($pay_id): void
    {
        $this->pay_id = $pay_id;
    }

    /**
     * @return mixed
     */
    public function getPayNum()
    {
        return $this->pay_num;
    }

    /**
     * @param mixed $pay_num
     */
    public function setPayNum($pay_num): void
    {
        $this->pay_num = $pay_num;
    }

    /**
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * @param mixed $create_time
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;
    }

    /**
     * @return mixed
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param mixed $custom
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
    }

    /**
     * @return mixed
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param mixed $device
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getNickName()
    {
        return $this->nick_name;
    }

    /**
     * @param mixed $nick_name
     */
    public function setNickName($nick_name)
    {
        $this->nick_name = $nick_name;
    }

    /**
     * @return mixed
     */
    public function getServerList()
    {
        return $this->server_list;
    }

    /**
     * @param mixed $server_list
     */
    public function setServerList($server_list)
    {
        $this->server_list = $server_list;
    }

    /**
     * @return mixed
     */
    public function getPayType()
    {
        return $this->pay_type;
    }

    /**
     * @param mixed $pay_type
     */
    public function setPayType($pay_type)
    {
        $this->pay_type = $pay_type;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getTestEmail()
    {
        return $this->test_email;
    }

    /**
     * @param mixed $test_email
     */
    public function setTestEmail($test_email)
    {
        $this->test_email = $test_email;
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * @param mixed $update_time
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
    }

}