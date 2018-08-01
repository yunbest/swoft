<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 会员表

 * @Entity()
 * @Table(name="mallbuilder_member")
 * @uses      MallbuilderMember
 */
class MallbuilderMember extends Model
{
    /**
     * @var int $userid ID
     * @Id()
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var int $pid 父类ID
     * @Column(name="pid", type="integer")
     */
    private $pid;

    /**
     * @var string $user 会员名
     * @Column(name="user", type="string", length=100)
     */
    private $user;

    /**
     * @var string $password 密码
     * @Column(name="password", type="char", length=32)
     */
    private $password;

    /**
     * @var string $name 真实名字
     * @Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var string $companyName 公司名称
     * @Column(name="company_name", type="string", length=100)
     */
    private $companyName;

    /**
     * @var int $sex 性别
     * @Column(name="sex", type="tinyint")
     */
    private $sex;

    /**
     * @var string $mobile 手机
     * @Column(name="mobile", type="string", length=30)
     */
    private $mobile;

    /**
     * @var string $email 邮箱
     * @Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string $qq QQ
     * @Column(name="qq", type="string", length=50)
     */
    private $qq;

    /**
     * @var string $ww 旺旺
     * @Column(name="ww", type="string", length=50)
     */
    private $ww;

    /**
     * @var int $provinceid 省ID
     * @Column(name="provinceid", type="integer")
     */
    private $provinceid;

    /**
     * @var int $cityid 市ID
     * @Column(name="cityid", type="integer")
     */
    private $cityid;

    /**
     * @var int $areaid 区ID
     * @Column(name="areaid", type="integer")
     */
    private $areaid;

    /**
     * @var int $streetid 
     * @Column(name="streetid", type="integer")
     */
    private $streetid;

    /**
     * @var string $area 省市区
     * @Column(name="area", type="string", length=255)
     */
    private $area;

    /**
     * @var int $gradeId 
     * @Column(name="grade_id", type="integer", default=1)
     */
    private $gradeId;

    /**
     * @var string $logo LOGO
     * @Column(name="logo", type="string", length=255, default="image/default/avatar.png")
     */
    private $logo;

    /**
     * @var string $ip IP
     * @Column(name="ip", type="char", length=15)
     * @Required()
     */
    private $ip;

    /**
     * @var int $statu 状态
     * @Column(name="statu", type="tinyint")
     */
    private $statu;

    /**
     * @var string $regtime 注册时间
     * @Column(name="regtime", type="datetime")
     */
    private $regtime;

    /**
     * @var int $lastLoginTime 最后登录时间
     * @Column(name="lastLoginTime", type="integer")
     */
    private $lastLoginTime;

    /**
     * @var string $invite 邀请者
     * @Column(name="invite", type="string", length=50)
     */
    private $invite;

    /**
     * @var int $sellerpoints 卖家信用
     * @Column(name="sellerpoints", type="integer", default=0)
     */
    private $sellerpoints;

    /**
     * @var int $buyerpoints 买家信用
     * @Column(name="buyerpoints", type="integer", default=0)
     */
    private $buyerpoints;

    /**
     * @var int $emailVerify 邮箱验证
     * @Column(name="email_verify", type="tinyint", default=0)
     */
    private $emailVerify;

    /**
     * @var int $mobileVerify 手机验证
     * @Column(name="mobile_verify", type="tinyint", default=0)
     */
    private $mobileVerify;

    /**
     * @var int $payId 
     * @Column(name="pay_id", type="integer")
     */
    private $payId;

    /**
     * @var int $memberType 0：主帐号1:财务2:采购3:经纪人
     * @Column(name="member_type", type="tinyint", default=0)
     */
    private $memberType;

    /**
     * @var int $parentId 主帐号id
     * @Column(name="parent_id", type="integer", default=0)
     */
    private $parentId;

    /**
     * @var int $economyTime 经纪人有效时间
     * @Column(name="economy_time", type="integer")
     */
    private $economyTime;

    /**
     * @var int $memberInformation 
     * @Column(name="member_information", type="tinyint", default=0)
     */
    private $memberInformation;

    /**
     * @var string $country 国家区号 默认+86
     * @Column(name="country", type="string", length=10, default="+86")
     */
    private $country;

    /**
     * @var string $qRInvite 二维邀请者
     * @Column(name="QR_invite", type="string", length=20)
     */
    private $qRInvite;

    /**
     * @var string $openid 微信id
     * @Column(name="openid", type="string", length=32)
     */
    private $openid;

    /**
     * @var string $unionid 微信唯一标识
     * @Column(name="unionid", type="string", length=60)
     */
    private $unionid;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value)
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 父类ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 会员名
     * @param string $value
     * @return $this
     */
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 密码
     * @param string $value
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * 真实名字
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 公司名称
     * @param string $value
     * @return $this
     */
    public function setCompanyName(string $value): self
    {
        $this->companyName = $value;

        return $this;
    }

    /**
     * 性别
     * @param int $value
     * @return $this
     */
    public function setSex(int $value): self
    {
        $this->sex = $value;

        return $this;
    }

    /**
     * 手机
     * @param string $value
     * @return $this
     */
    public function setMobile(string $value): self
    {
        $this->mobile = $value;

        return $this;
    }

    /**
     * 邮箱
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * QQ
     * @param string $value
     * @return $this
     */
    public function setQq(string $value): self
    {
        $this->qq = $value;

        return $this;
    }

    /**
     * 旺旺
     * @param string $value
     * @return $this
     */
    public function setWw(string $value): self
    {
        $this->ww = $value;

        return $this;
    }

    /**
     * 省ID
     * @param int $value
     * @return $this
     */
    public function setProvinceid(int $value): self
    {
        $this->provinceid = $value;

        return $this;
    }

    /**
     * 市ID
     * @param int $value
     * @return $this
     */
    public function setCityid(int $value): self
    {
        $this->cityid = $value;

        return $this;
    }

    /**
     * 区ID
     * @param int $value
     * @return $this
     */
    public function setAreaid(int $value): self
    {
        $this->areaid = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStreetid(int $value): self
    {
        $this->streetid = $value;

        return $this;
    }

    /**
     * 省市区
     * @param string $value
     * @return $this
     */
    public function setArea(string $value): self
    {
        $this->area = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setGradeId(int $value): self
    {
        $this->gradeId = $value;

        return $this;
    }

    /**
     * LOGO
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

        return $this;
    }

    /**
     * IP
     * @param string $value
     * @return $this
     */
    public function setIp(string $value): self
    {
        $this->ip = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 注册时间
     * @param string $value
     * @return $this
     */
    public function setRegtime(string $value): self
    {
        $this->regtime = $value;

        return $this;
    }

    /**
     * 最后登录时间
     * @param int $value
     * @return $this
     */
    public function setLastLoginTime(int $value): self
    {
        $this->lastLoginTime = $value;

        return $this;
    }

    /**
     * 邀请者
     * @param string $value
     * @return $this
     */
    public function setInvite(string $value): self
    {
        $this->invite = $value;

        return $this;
    }

    /**
     * 卖家信用
     * @param int $value
     * @return $this
     */
    public function setSellerpoints(int $value): self
    {
        $this->sellerpoints = $value;

        return $this;
    }

    /**
     * 买家信用
     * @param int $value
     * @return $this
     */
    public function setBuyerpoints(int $value): self
    {
        $this->buyerpoints = $value;

        return $this;
    }

    /**
     * 邮箱验证
     * @param int $value
     * @return $this
     */
    public function setEmailVerify(int $value): self
    {
        $this->emailVerify = $value;

        return $this;
    }

    /**
     * 手机验证
     * @param int $value
     * @return $this
     */
    public function setMobileVerify(int $value): self
    {
        $this->mobileVerify = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setPayId(int $value): self
    {
        $this->payId = $value;

        return $this;
    }

    /**
     * 0：主帐号1:财务2:采购3:经纪人
     * @param int $value
     * @return $this
     */
    public function setMemberType(int $value): self
    {
        $this->memberType = $value;

        return $this;
    }

    /**
     * 主帐号id
     * @param int $value
     * @return $this
     */
    public function setParentId(int $value): self
    {
        $this->parentId = $value;

        return $this;
    }

    /**
     * 经纪人有效时间
     * @param int $value
     * @return $this
     */
    public function setEconomyTime(int $value): self
    {
        $this->economyTime = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setMemberInformation(int $value): self
    {
        $this->memberInformation = $value;

        return $this;
    }

    /**
     * 国家区号 默认+86
     * @param string $value
     * @return $this
     */
    public function setCountry(string $value): self
    {
        $this->country = $value;

        return $this;
    }

    /**
     * 二维邀请者
     * @param string $value
     * @return $this
     */
    public function setQRInvite(string $value): self
    {
        $this->qRInvite = $value;

        return $this;
    }

    /**
     * 微信id
     * @param string $value
     * @return $this
     */
    public function setOpenid(string $value): self
    {
        $this->openid = $value;

        return $this;
    }

    /**
     * 微信唯一标识
     * @param string $value
     * @return $this
     */
    public function setUnionid(string $value): self
    {
        $this->unionid = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 父类ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 会员名
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 密码
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 真实名字
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 公司名称
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * 性别
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * 手机
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 邮箱
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * QQ
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * 旺旺
     * @return string
     */
    public function getWw()
    {
        return $this->ww;
    }

    /**
     * 省ID
     * @return int
     */
    public function getProvinceid()
    {
        return $this->provinceid;
    }

    /**
     * 市ID
     * @return int
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * 区ID
     * @return int
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * @return int
     */
    public function getStreetid()
    {
        return $this->streetid;
    }

    /**
     * 省市区
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return mixed
     */
    public function getGradeId()
    {
        return $this->gradeId;
    }

    /**
     * LOGO
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * IP
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * 注册时间
     * @return string
     */
    public function getRegtime()
    {
        return $this->regtime;
    }

    /**
     * 最后登录时间
     * @return int
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

    /**
     * 邀请者
     * @return string
     */
    public function getInvite()
    {
        return $this->invite;
    }

    /**
     * 卖家信用
     * @return int
     */
    public function getSellerpoints()
    {
        return $this->sellerpoints;
    }

    /**
     * 买家信用
     * @return int
     */
    public function getBuyerpoints()
    {
        return $this->buyerpoints;
    }

    /**
     * 邮箱验证
     * @return int
     */
    public function getEmailVerify()
    {
        return $this->emailVerify;
    }

    /**
     * 手机验证
     * @return int
     */
    public function getMobileVerify()
    {
        return $this->mobileVerify;
    }

    /**
     * @return int
     */
    public function getPayId()
    {
        return $this->payId;
    }

    /**
     * 0：主帐号1:财务2:采购3:经纪人
     * @return int
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * 主帐号id
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * 经纪人有效时间
     * @return int
     */
    public function getEconomyTime()
    {
        return $this->economyTime;
    }

    /**
     * @return int
     */
    public function getMemberInformation()
    {
        return $this->memberInformation;
    }

    /**
     * 国家区号 默认+86
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * 二维邀请者
     * @return string
     */
    public function getQRInvite()
    {
        return $this->qRInvite;
    }

    /**
     * 微信id
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * 微信唯一标识
     * @return string
     */
    public function getUnionid()
    {
        return $this->unionid;
    }

}
