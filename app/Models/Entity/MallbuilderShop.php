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
 * 店铺表

 * @Entity()
 * @Table(name="mallbuilder_shop")
 * @uses      MallbuilderShop
 */
class MallbuilderShop extends Model
{
    /**
     * @var int $userid ID
     * @Column(name="userid", type="integer", default=0)
     */
    private $userid;

    /**
     * @var string $user 会员ID
     * @Column(name="user", type="string", length=100)
     */
    private $user;

    /**
     * @var string $catid 分类ID
     * @Column(name="catid", type="char", length=10)
     */
    private $catid;

    /**
     * @var string $company 店铺名称
     * @Column(name="company", type="char", length=60)
     */
    private $company;

    /**
     * @var string $tel 联系电话
     * @Column(name="tel", type="string", length=30)
     */
    private $tel;

    /**
     * @var string $addr 地址
     * @Column(name="addr", type="string", length=200)
     */
    private $addr;

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
     * @var string $mainPro 主营产品
     * @Column(name="main_pro", type="string", length=100)
     */
    private $mainPro;

    /**
     * @var string $logo logo
     * @Column(name="logo", type="string", length=100)
     */
    private $logo;

    /**
     * @var string $template 店铺模板
     * @Column(name="template", type="string", length=255)
     */
    private $template;

    /**
     * @var int $stime 开始时间
     * @Column(name="stime", type="integer")
     */
    private $stime;

    /**
     * @var int $etime 结束时间
     * @Column(name="etime", type="integer")
     */
    private $etime;

    /**
     * @var int $statu 状态
     * @Column(name="statu", type="tinyint")
     */
    private $statu;

    /**
     * @var float $rank 排名
     * @Column(name="rank", type="float", default=0)
     */
    private $rank;

    /**
     * @var int $viewTimes 点击率
     * @Column(name="view_times", type="integer", default=0)
     */
    private $viewTimes;

    /**
     * @var int $uptime 更新时间
     * @Column(name="uptime", type="integer")
     */
    private $uptime;

    /**
     * @var int $createTime 创店时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $shopStatu 开店状态
     * @Column(name="shop_statu", type="tinyint", default=0)
     */
    private $shopStatu;

    /**
     * @var int $credit 信用服务
     * @Column(name="credit", type="integer")
     */
    private $credit;

    /**
     * @var int $shopCollect 店铺收藏数量
     * @Column(name="shop_collect", type="integer", default=0)
     */
    private $shopCollect;

    /**
     * @var float $earnest 保证金
     * @Column(name="earnest", type="float", default=0)
     */
    private $earnest;

    /**
     * @var int $grade 店铺等级
     * @Column(name="grade", type="tinyint", default=0)
     */
    private $grade;

    /**
     * @var int $shopAuth 店铺认证
     * @Column(name="shop_auth", type="tinyint", default=0)
     */
    private $shopAuth;

    /**
     * @var int $shopkeeperAuth 店主认证
     * @Column(name="shopkeeper_auth", type="tinyint", default=0)
     */
    private $shopkeeperAuth;

    /**
     * @var string $shopAuthPic 店铺认证图片
     * @Column(name="shop_auth_pic", type="string", length=100)
     */
    private $shopAuthPic;

    /**
     * @var string $shopkeeperAuthPic 店主认证图片
     * @Column(name="shopkeeper_auth_pic", type="string", length=100)
     */
    private $shopkeeperAuthPic;

    /**
     * @var string $domin 顶级域名
     * @Column(name="domin", type="string", length=255)
     */
    private $domin;

    /**
     * @var float $lng 经度
     * @Column(name="lng", type="float", default=0)
     */
    private $lng;

    /**
     * @var float $lat 纬度
     * @Column(name="lat", type="float", default=0)
     */
    private $lat;

    /**
     * @var float $shopFreeShipping 单次购物免运费
     * @Column(name="shop_free_shipping", type="float", default=100000)
     */
    private $shopFreeShipping;

    /**
     * @var int $brandId 关联品牌ID,没有关联为0
     * @Column(name="brand_id", type="integer", default=0)
     */
    private $brandId;

    /**
     * @var int $lTemp 物流
     * @Column(name="l_temp", type="integer")
     */
    private $lTemp;

    /**
     * @var int $lTotal 物流满多少包邮
     * @Column(name="l_total", type="integer", default=300)
     */
    private $lTotal;

    /**
     * @var int $lValue 邮费
     * @Column(name="l_value", type="integer", default=26)
     */
    private $lValue;

    /**
     * @var string $proShippingUrl 生产环境发货API接口地址
     * @Column(name="proShippingUrl", type="string", length=255)
     */
    private $proShippingUrl;

    /**
     * @var string $testShippingUrl 测试环境发货API接口地址
     * @Column(name="testShippingUrl", type="string", length=255)
     */
    private $testShippingUrl;

    /**
     * @var string $proUploadUrl 生产环境上传身份证API接口地址
     * @Column(name="proUploadUrl", type="string", length=255)
     */
    private $proUploadUrl;

    /**
     * @var string $testUploadUrl 测试环境上传身份证API接口地址
     * @Column(name="testUploadUrl", type="string", length=255)
     */
    private $testUploadUrl;

    /**
     * @var int $serverEnvironment 服务器环境,1为测试,2为正式
     * @Column(name="server_environment", type="integer", default=1)
     */
    private $serverEnvironment;

    /**
     * @var int $depot 仓库类型,1为国内仓,2为国外仓
     * @Column(name="depot", type="integer", default=1)
     */
    private $depot;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 会员ID
     * @param string $value
     * @return $this
     */
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 分类ID
     * @param string $value
     * @return $this
     */
    public function setCatid(string $value): self
    {
        $this->catid = $value;

        return $this;
    }

    /**
     * 店铺名称
     * @param string $value
     * @return $this
     */
    public function setCompany(string $value): self
    {
        $this->company = $value;

        return $this;
    }

    /**
     * 联系电话
     * @param string $value
     * @return $this
     */
    public function setTel(string $value): self
    {
        $this->tel = $value;

        return $this;
    }

    /**
     * 地址
     * @param string $value
     * @return $this
     */
    public function setAddr(string $value): self
    {
        $this->addr = $value;

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
     * 主营产品
     * @param string $value
     * @return $this
     */
    public function setMainPro(string $value): self
    {
        $this->mainPro = $value;

        return $this;
    }

    /**
     * logo
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

        return $this;
    }

    /**
     * 店铺模板
     * @param string $value
     * @return $this
     */
    public function setTemplate(string $value): self
    {
        $this->template = $value;

        return $this;
    }

    /**
     * 开始时间
     * @param int $value
     * @return $this
     */
    public function setStime(int $value): self
    {
        $this->stime = $value;

        return $this;
    }

    /**
     * 结束时间
     * @param int $value
     * @return $this
     */
    public function setEtime(int $value): self
    {
        $this->etime = $value;

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
     * 排名
     * @param float $value
     * @return $this
     */
    public function setRank(float $value): self
    {
        $this->rank = $value;

        return $this;
    }

    /**
     * 点击率
     * @param int $value
     * @return $this
     */
    public function setViewTimes(int $value): self
    {
        $this->viewTimes = $value;

        return $this;
    }

    /**
     * 更新时间
     * @param int $value
     * @return $this
     */
    public function setUptime(int $value): self
    {
        $this->uptime = $value;

        return $this;
    }

    /**
     * 创店时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 开店状态
     * @param int $value
     * @return $this
     */
    public function setShopStatu(int $value): self
    {
        $this->shopStatu = $value;

        return $this;
    }

    /**
     * 信用服务
     * @param int $value
     * @return $this
     */
    public function setCredit(int $value): self
    {
        $this->credit = $value;

        return $this;
    }

    /**
     * 店铺收藏数量
     * @param int $value
     * @return $this
     */
    public function setShopCollect(int $value): self
    {
        $this->shopCollect = $value;

        return $this;
    }

    /**
     * 保证金
     * @param float $value
     * @return $this
     */
    public function setEarnest(float $value): self
    {
        $this->earnest = $value;

        return $this;
    }

    /**
     * 店铺等级
     * @param int $value
     * @return $this
     */
    public function setGrade(int $value): self
    {
        $this->grade = $value;

        return $this;
    }

    /**
     * 店铺认证
     * @param int $value
     * @return $this
     */
    public function setShopAuth(int $value): self
    {
        $this->shopAuth = $value;

        return $this;
    }

    /**
     * 店主认证
     * @param int $value
     * @return $this
     */
    public function setShopkeeperAuth(int $value): self
    {
        $this->shopkeeperAuth = $value;

        return $this;
    }

    /**
     * 店铺认证图片
     * @param string $value
     * @return $this
     */
    public function setShopAuthPic(string $value): self
    {
        $this->shopAuthPic = $value;

        return $this;
    }

    /**
     * 店主认证图片
     * @param string $value
     * @return $this
     */
    public function setShopkeeperAuthPic(string $value): self
    {
        $this->shopkeeperAuthPic = $value;

        return $this;
    }

    /**
     * 顶级域名
     * @param string $value
     * @return $this
     */
    public function setDomin(string $value): self
    {
        $this->domin = $value;

        return $this;
    }

    /**
     * 经度
     * @param float $value
     * @return $this
     */
    public function setLng(float $value): self
    {
        $this->lng = $value;

        return $this;
    }

    /**
     * 纬度
     * @param float $value
     * @return $this
     */
    public function setLat(float $value): self
    {
        $this->lat = $value;

        return $this;
    }

    /**
     * 单次购物免运费
     * @param float $value
     * @return $this
     */
    public function setShopFreeShipping(float $value): self
    {
        $this->shopFreeShipping = $value;

        return $this;
    }

    /**
     * 关联品牌ID,没有关联为0
     * @param int $value
     * @return $this
     */
    public function setBrandId(int $value): self
    {
        $this->brandId = $value;

        return $this;
    }

    /**
     * 物流
     * @param int $value
     * @return $this
     */
    public function setLTemp(int $value): self
    {
        $this->lTemp = $value;

        return $this;
    }

    /**
     * 物流满多少包邮
     * @param int $value
     * @return $this
     */
    public function setLTotal(int $value): self
    {
        $this->lTotal = $value;

        return $this;
    }

    /**
     * 邮费
     * @param int $value
     * @return $this
     */
    public function setLValue(int $value): self
    {
        $this->lValue = $value;

        return $this;
    }

    /**
     * 生产环境发货API接口地址
     * @param string $value
     * @return $this
     */
    public function setProShippingUrl(string $value): self
    {
        $this->proShippingUrl = $value;

        return $this;
    }

    /**
     * 测试环境发货API接口地址
     * @param string $value
     * @return $this
     */
    public function setTestShippingUrl(string $value): self
    {
        $this->testShippingUrl = $value;

        return $this;
    }

    /**
     * 生产环境上传身份证API接口地址
     * @param string $value
     * @return $this
     */
    public function setProUploadUrl(string $value): self
    {
        $this->proUploadUrl = $value;

        return $this;
    }

    /**
     * 测试环境上传身份证API接口地址
     * @param string $value
     * @return $this
     */
    public function setTestUploadUrl(string $value): self
    {
        $this->testUploadUrl = $value;

        return $this;
    }

    /**
     * 服务器环境,1为测试,2为正式
     * @param int $value
     * @return $this
     */
    public function setServerEnvironment(int $value): self
    {
        $this->serverEnvironment = $value;

        return $this;
    }

    /**
     * 仓库类型,1为国内仓,2为国外仓
     * @param int $value
     * @return $this
     */
    public function setDepot(int $value): self
    {
        $this->depot = $value;

        return $this;
    }

    /**
     * ID
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 会员ID
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 分类ID
     * @return string
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * 店铺名称
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * 联系电话
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * 地址
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
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
     * 主营产品
     * @return string
     */
    public function getMainPro()
    {
        return $this->mainPro;
    }

    /**
     * logo
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * 店铺模板
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * 开始时间
     * @return int
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * 结束时间
     * @return int
     */
    public function getEtime()
    {
        return $this->etime;
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
     * 排名
     * @return float
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * 点击率
     * @return int
     */
    public function getViewTimes()
    {
        return $this->viewTimes;
    }

    /**
     * 更新时间
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * 创店时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 开店状态
     * @return int
     */
    public function getShopStatu()
    {
        return $this->shopStatu;
    }

    /**
     * 信用服务
     * @return int
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * 店铺收藏数量
     * @return int
     */
    public function getShopCollect()
    {
        return $this->shopCollect;
    }

    /**
     * 保证金
     * @return mixed
     */
    public function getEarnest()
    {
        return $this->earnest;
    }

    /**
     * 店铺等级
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * 店铺认证
     * @return int
     */
    public function getShopAuth()
    {
        return $this->shopAuth;
    }

    /**
     * 店主认证
     * @return int
     */
    public function getShopkeeperAuth()
    {
        return $this->shopkeeperAuth;
    }

    /**
     * 店铺认证图片
     * @return string
     */
    public function getShopAuthPic()
    {
        return $this->shopAuthPic;
    }

    /**
     * 店主认证图片
     * @return string
     */
    public function getShopkeeperAuthPic()
    {
        return $this->shopkeeperAuthPic;
    }

    /**
     * 顶级域名
     * @return string
     */
    public function getDomin()
    {
        return $this->domin;
    }

    /**
     * 经度
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * 纬度
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * 单次购物免运费
     * @return mixed
     */
    public function getShopFreeShipping()
    {
        return $this->shopFreeShipping;
    }

    /**
     * 关联品牌ID,没有关联为0
     * @return int
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * 物流
     * @return int
     */
    public function getLTemp()
    {
        return $this->lTemp;
    }

    /**
     * 物流满多少包邮
     * @return mixed
     */
    public function getLTotal()
    {
        return $this->lTotal;
    }

    /**
     * 邮费
     * @return mixed
     */
    public function getLValue()
    {
        return $this->lValue;
    }

    /**
     * 生产环境发货API接口地址
     * @return string
     */
    public function getProShippingUrl()
    {
        return $this->proShippingUrl;
    }

    /**
     * 测试环境发货API接口地址
     * @return string
     */
    public function getTestShippingUrl()
    {
        return $this->testShippingUrl;
    }

    /**
     * 生产环境上传身份证API接口地址
     * @return string
     */
    public function getProUploadUrl()
    {
        return $this->proUploadUrl;
    }

    /**
     * 测试环境上传身份证API接口地址
     * @return string
     */
    public function getTestUploadUrl()
    {
        return $this->testUploadUrl;
    }

    /**
     * 服务器环境,1为测试,2为正式
     * @return mixed
     */
    public function getServerEnvironment()
    {
        return $this->serverEnvironment;
    }

    /**
     * 仓库类型,1为国内仓,2为国外仓
     * @return mixed
     */
    public function getDepot()
    {
        return $this->depot;
    }

}
