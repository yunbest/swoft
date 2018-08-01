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
 * 产品表

 * @Entity()
 * @Table(name="mallbuilder_product")
 * @uses      MallbuilderProduct
 */
class MallbuilderProduct extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $memberId 会员ID
     * @Column(name="member_id", type="integer", default=0)
     */
    private $memberId;

    /**
     * @var string $memberName 会员名
     * @Column(name="member_name", type="string", length=100)
     */
    private $memberName;

    /**
     * @var int $catid 分类ID
     * @Column(name="catid", type="integer", default=0)
     */
    private $catid;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var string $name 名称
     * @Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string $subhead 标题
     * @Column(name="subhead", type="string", length=255)
     */
    private $subhead;

    /**
     * @var string $keywords 关键字
     * @Column(name="keywords", type="string", length=100)
     */
    private $keywords;

    /**
     * @var string $brand 品牌
     * @Column(name="brand", type="string", length=100)
     */
    private $brand;

    /**
     * @var float $marketPrice 市场价,存币种相应的价格
     * @Column(name="market_price", type="float")
     */
    private $marketPrice;

    /**
     * @var float $price 会员价格,存币种相应的价格
     * @Column(name="price", type="float", default=0)
     */
    private $price;

    /**
     * @var float $firstPrice 一级分销价，此价格为上传时的原始价格
     * @Column(name="first_price", type="float", default=0)
     */
    private $firstPrice;

    /**
     * @var float $secondPrice 二级分销价,存币种相应的价格
     * @Column(name="second_price", type="float", default=0)
     */
    private $secondPrice;

    /**
     * @var int $stock 库存
     * @Column(name="stock", type="integer", default=0)
     */
    private $stock;

    /**
     * @var int $sales 销量
     * @Column(name="sales", type="integer", default=0)
     */
    private $sales;

    /**
     * @var string $code 货号
     * @Column(name="code", type="string", length=50)
     */
    private $code;

    /**
     * @var string $shopCode 商品编码
     * @Column(name="shop_code", type="string", length=255)
     */
    private $shopCode;

    /**
     * @var string $relationCode 关联商品编码
     * @Column(name="relation_code", type="string", length=50)
     */
    private $relationCode;

    /**
     * @var string $pic 图片
     * @Column(name="pic", type="string", length=255)
     */
    private $pic;

    /**
     * @var string $picMore 图片
     * @Column(name="pic_more", type="text", length=65535)
     */
    private $picMore;

    /**
     * @var int $startTimeType 开始时间类型
     * @Column(name="start_time_type", type="tinyint", default=1)
     */
    private $startTimeType;

    /**
     * @var int $startTime 开始时间
     * @Column(name="start_time", type="integer")
     */
    private $startTime;

    /**
     * @var int $validTime 有效期
     * @Column(name="valid_time", type="tinyint", default=0)
     */
    private $validTime;

    /**
     * @var float $weight 体积
     * @Column(name="weight", type="float", default=0)
     */
    private $weight;

    /**
     * @var float $cubage 重量
     * @Column(name="cubage", type="float", default=0)
     */
    private $cubage;

    /**
     * @var int $provinceId 省
     * @Column(name="province_id", type="integer")
     */
    private $provinceId;

    /**
     * @var int $cityId 市
     * @Column(name="city_id", type="integer")
     */
    private $cityId;

    /**
     * @var int $areaId 区
     * @Column(name="area_id", type="integer")
     */
    private $areaId;

    /**
     * @var int $streetId 
     * @Column(name="street_id", type="integer")
     */
    private $streetId;

    /**
     * @var string $area 省市区
     * @Column(name="area", type="string", length=255)
     */
    private $area;

    /**
     * @var int $freightId 运费
     * @Column(name="freight_id", type="integer")
     */
    private $freightId;

    /**
     * @var int $freightType 快递方式 卖家承担 买家承担
     * @Column(name="freight_type", type="tinyint", default=1)
     */
    private $freightType;

    /**
     * @var float $postPrice 平邮
     * @Column(name="post_price", type="float", default=0)
     */
    private $postPrice;

    /**
     * @var float $expressPrice 快递
     * @Column(name="express_price", type="float", default=0)
     */
    private $expressPrice;

    /**
     * @var float $emsPrice EMS
     * @Column(name="ems_price", type="float", default=0)
     */
    private $emsPrice;

    /**
     * @var int $clicks 点击率
     * @Column(name="clicks", type="integer", default=0)
     */
    private $clicks;

    /**
     * @var int $rank 排名
     * @Column(name="rank", type="integer", default=0)
     */
    private $rank;

    /**
     * @var int $uptime 更新时间
     * @Column(name="uptime", type="integer")
     */
    private $uptime;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * @var int $isShelves 是否上架
     * @Column(name="is_shelves", type="tinyint", default=1)
     */
    private $isShelves;

    /**
     * @var int $customCatId 自定义分类
     * @Column(name="custom_cat_id", type="integer")
     */
    private $customCatId;

    /**
     * @var int $promotionId 促销ID
     * @Column(name="promotion_id", type="integer", default=0)
     */
    private $promotionId;

    /**
     * @var int $goodbad 评论得分
     * @Column(name="goodbad", type="integer", default=0)
     */
    private $goodbad;

    /**
     * @var int $shopRec 橱窗推荐
     * @Column(name="shop_rec", type="tinyint", default=0)
     */
    private $shopRec;

    /**
     * @var int $isInvoice 是否开发票0无1个人发票2增值税普通发票3增值税专用发票
     * @Column(name="is_invoice", type="tinyint", default=0)
     */
    private $isInvoice;

    /**
     * @var string $isTg 
     * @Column(name="is_tg", type="string", length=5, default="false")
     */
    private $isTg;

    /**
     * @var int $isBigtg 1大商品团购0普通团购
     * @Column(name="is_bigtg", type="tinyint", default=0)
     */
    private $isBigtg;

    /**
     * @var string $con 
     * @Column(name="con", type="string", length=100)
     */
    private $con;

    /**
     * @var int $isVirtual 是否为虚拟商品
     * @Column(name="is_virtual", type="tinyint", default=0)
     */
    private $isVirtual;

    /**
     * @var string $downReason 下架原因
     * @Column(name="down_reason", type="string", length=100, default="")
     */
    private $downReason;

    /**
     * @var int $payMethod 付款方式1：在线支付2：货到付款3：线下付款
     * @Column(name="pay_method", type="tinyint", default=1)
     */
    private $payMethod;

    /**
     * @var int $view 页面浏览量
     * @Column(name="view", type="integer", default=0)
     */
    private $view;

    /**
     * @var string $videoUrl 3D视频链接
     * @Column(name="video_url", type="string", length=255)
     */
    private $videoUrl;

    /**
     * @var int $promoteStartTime 优惠起始时间
     * @Column(name="promote_start_time", type="integer")
     */
    private $promoteStartTime;

    /**
     * @var int $promoteEndTime 优惠结束时间
     * @Column(name="promote_end_time", type="integer")
     */
    private $promoteEndTime;

    /**
     * @var float $promotePrice 优惠价格
     * @Column(name="promote_price", type="float")
     */
    private $promotePrice;

    /**
     * @var int $isSelf 是否到店取货(1否2是)
     * @Id()
     * @Column(name="is_self", type="tinyint")
     */
    private $isSelf;

    /**
     * @var int $isDist 推荐人ID
     * @Column(name="is_dist", type="integer")
     */
    private $isDist;

    /**
     * @var int $cid 仓库ID
     * @Column(name="cid", type="integer", default=1)
     */
    private $cid;

    /**
     * @var int $gid 国家ID
     * @Column(name="gid", type="integer", default=1)
     */
    private $gid;

    /**
     * @var string $revenue 税率，产品价格的百分比
     * @Column(name="revenue", type="string", length=10)
     */
    private $revenue;

    /**
     * @var string $currency 基本币种
     * @Column(name="currency", type="string", length=50)
     */
    private $currency;

    /**
     * @var int $pcs 
     * @Column(name="pcs", type="integer", default=1)
     */
    private $pcs;

    /**
     * @var string $specId 
     * @Column(name="spec_id", type="string", length=50)
     * @Required()
     */
    private $specId;

    /**
     * @var float $gradePrice 
     * @Column(name="grade_price", type="float")
     */
    private $gradePrice;

    /**
     * @var string $typ O为其他 M为儿童 B 为成人
     * @Column(name="typ", type="string", length=10)
     */
    private $typ;

    /**
     * @var string $memberCoefficient 会员系数,为经纪人*该系数
     * @Column(name="member_coefficient", type="string", length=10, default="0.85")
     */
    private $memberCoefficient;

    /**
     * @var string $brokerCoefficient 经纪人系数,为一级分销*系数
     * @Column(name="broker_coefficient", type="string", length=10, default="1")
     */
    private $brokerCoefficient;

    /**
     * @var string $bazaarCoefficient 市场价系数,为会员价*该系数
     * @Column(name="bazaar_coefficient", type="string", length=10, default="0.85")
     */
    private $bazaarCoefficient;

    /**
     * @var string $twoCoefficient 二级分销系数,为一级分销价*系数
     * @Column(name="two_coefficient", type="string", length=10, default="1")
     */
    private $twoCoefficient;

    /**
     * @var float $costPrice 成本价格
     * @Column(name="cost_price", type="decimal")
     */
    private $costPrice;

    /**
     * @var int $isCommend 是否推荐
     * @Column(name="is_commend", type="tinyint", default=0)
     */
    private $isCommend;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 会员名
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

        return $this;
    }

    /**
     * 分类ID
     * @param int $value
     * @return $this
     */
    public function setCatid(int $value): self
    {
        $this->catid = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 标题
     * @param string $value
     * @return $this
     */
    public function setSubhead(string $value): self
    {
        $this->subhead = $value;

        return $this;
    }

    /**
     * 关键字
     * @param string $value
     * @return $this
     */
    public function setKeywords(string $value): self
    {
        $this->keywords = $value;

        return $this;
    }

    /**
     * 品牌
     * @param string $value
     * @return $this
     */
    public function setBrand(string $value): self
    {
        $this->brand = $value;

        return $this;
    }

    /**
     * 市场价,存币种相应的价格
     * @param float $value
     * @return $this
     */
    public function setMarketPrice(float $value): self
    {
        $this->marketPrice = $value;

        return $this;
    }

    /**
     * 会员价格,存币种相应的价格
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 一级分销价，此价格为上传时的原始价格
     * @param float $value
     * @return $this
     */
    public function setFirstPrice(float $value): self
    {
        $this->firstPrice = $value;

        return $this;
    }

    /**
     * 二级分销价,存币种相应的价格
     * @param float $value
     * @return $this
     */
    public function setSecondPrice(float $value): self
    {
        $this->secondPrice = $value;

        return $this;
    }

    /**
     * 库存
     * @param int $value
     * @return $this
     */
    public function setStock(int $value): self
    {
        $this->stock = $value;

        return $this;
    }

    /**
     * 销量
     * @param int $value
     * @return $this
     */
    public function setSales(int $value): self
    {
        $this->sales = $value;

        return $this;
    }

    /**
     * 货号
     * @param string $value
     * @return $this
     */
    public function setCode(string $value): self
    {
        $this->code = $value;

        return $this;
    }

    /**
     * 商品编码
     * @param string $value
     * @return $this
     */
    public function setShopCode(string $value): self
    {
        $this->shopCode = $value;

        return $this;
    }

    /**
     * 关联商品编码
     * @param string $value
     * @return $this
     */
    public function setRelationCode(string $value): self
    {
        $this->relationCode = $value;

        return $this;
    }

    /**
     * 图片
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * 图片
     * @param string $value
     * @return $this
     */
    public function setPicMore(string $value): self
    {
        $this->picMore = $value;

        return $this;
    }

    /**
     * 开始时间类型
     * @param int $value
     * @return $this
     */
    public function setStartTimeType(int $value): self
    {
        $this->startTimeType = $value;

        return $this;
    }

    /**
     * 开始时间
     * @param int $value
     * @return $this
     */
    public function setStartTime(int $value): self
    {
        $this->startTime = $value;

        return $this;
    }

    /**
     * 有效期
     * @param int $value
     * @return $this
     */
    public function setValidTime(int $value): self
    {
        $this->validTime = $value;

        return $this;
    }

    /**
     * 体积
     * @param float $value
     * @return $this
     */
    public function setWeight(float $value): self
    {
        $this->weight = $value;

        return $this;
    }

    /**
     * 重量
     * @param float $value
     * @return $this
     */
    public function setCubage(float $value): self
    {
        $this->cubage = $value;

        return $this;
    }

    /**
     * 省
     * @param int $value
     * @return $this
     */
    public function setProvinceId(int $value): self
    {
        $this->provinceId = $value;

        return $this;
    }

    /**
     * 市
     * @param int $value
     * @return $this
     */
    public function setCityId(int $value): self
    {
        $this->cityId = $value;

        return $this;
    }

    /**
     * 区
     * @param int $value
     * @return $this
     */
    public function setAreaId(int $value): self
    {
        $this->areaId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStreetId(int $value): self
    {
        $this->streetId = $value;

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
     * 运费
     * @param int $value
     * @return $this
     */
    public function setFreightId(int $value): self
    {
        $this->freightId = $value;

        return $this;
    }

    /**
     * 快递方式 卖家承担 买家承担
     * @param int $value
     * @return $this
     */
    public function setFreightType(int $value): self
    {
        $this->freightType = $value;

        return $this;
    }

    /**
     * 平邮
     * @param float $value
     * @return $this
     */
    public function setPostPrice(float $value): self
    {
        $this->postPrice = $value;

        return $this;
    }

    /**
     * 快递
     * @param float $value
     * @return $this
     */
    public function setExpressPrice(float $value): self
    {
        $this->expressPrice = $value;

        return $this;
    }

    /**
     * EMS
     * @param float $value
     * @return $this
     */
    public function setEmsPrice(float $value): self
    {
        $this->emsPrice = $value;

        return $this;
    }

    /**
     * 点击率
     * @param int $value
     * @return $this
     */
    public function setClicks(int $value): self
    {
        $this->clicks = $value;

        return $this;
    }

    /**
     * 排名
     * @param int $value
     * @return $this
     */
    public function setRank(int $value): self
    {
        $this->rank = $value;

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
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 是否上架
     * @param int $value
     * @return $this
     */
    public function setIsShelves(int $value): self
    {
        $this->isShelves = $value;

        return $this;
    }

    /**
     * 自定义分类
     * @param int $value
     * @return $this
     */
    public function setCustomCatId(int $value): self
    {
        $this->customCatId = $value;

        return $this;
    }

    /**
     * 促销ID
     * @param int $value
     * @return $this
     */
    public function setPromotionId(int $value): self
    {
        $this->promotionId = $value;

        return $this;
    }

    /**
     * 评论得分
     * @param int $value
     * @return $this
     */
    public function setGoodbad(int $value): self
    {
        $this->goodbad = $value;

        return $this;
    }

    /**
     * 橱窗推荐
     * @param int $value
     * @return $this
     */
    public function setShopRec(int $value): self
    {
        $this->shopRec = $value;

        return $this;
    }

    /**
     * 是否开发票0无1个人发票2增值税普通发票3增值税专用发票
     * @param int $value
     * @return $this
     */
    public function setIsInvoice(int $value): self
    {
        $this->isInvoice = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIsTg(string $value): self
    {
        $this->isTg = $value;

        return $this;
    }

    /**
     * 1大商品团购0普通团购
     * @param int $value
     * @return $this
     */
    public function setIsBigtg(int $value): self
    {
        $this->isBigtg = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCon(string $value): self
    {
        $this->con = $value;

        return $this;
    }

    /**
     * 是否为虚拟商品
     * @param int $value
     * @return $this
     */
    public function setIsVirtual(int $value): self
    {
        $this->isVirtual = $value;

        return $this;
    }

    /**
     * 下架原因
     * @param string $value
     * @return $this
     */
    public function setDownReason(string $value): self
    {
        $this->downReason = $value;

        return $this;
    }

    /**
     * 付款方式1：在线支付2：货到付款3：线下付款
     * @param int $value
     * @return $this
     */
    public function setPayMethod(int $value): self
    {
        $this->payMethod = $value;

        return $this;
    }

    /**
     * 页面浏览量
     * @param int $value
     * @return $this
     */
    public function setView(int $value): self
    {
        $this->view = $value;

        return $this;
    }

    /**
     * 3D视频链接
     * @param string $value
     * @return $this
     */
    public function setVideoUrl(string $value): self
    {
        $this->videoUrl = $value;

        return $this;
    }

    /**
     * 优惠起始时间
     * @param int $value
     * @return $this
     */
    public function setPromoteStartTime(int $value): self
    {
        $this->promoteStartTime = $value;

        return $this;
    }

    /**
     * 优惠结束时间
     * @param int $value
     * @return $this
     */
    public function setPromoteEndTime(int $value): self
    {
        $this->promoteEndTime = $value;

        return $this;
    }

    /**
     * 优惠价格
     * @param float $value
     * @return $this
     */
    public function setPromotePrice(float $value): self
    {
        $this->promotePrice = $value;

        return $this;
    }

    /**
     * 是否到店取货(1否2是)
     * @param int $value
     * @return $this
     */
    public function setIsSelf(int $value)
    {
        $this->isSelf = $value;

        return $this;
    }

    /**
     * 推荐人ID
     * @param int $value
     * @return $this
     */
    public function setIsDist(int $value): self
    {
        $this->isDist = $value;

        return $this;
    }

    /**
     * 仓库ID
     * @param int $value
     * @return $this
     */
    public function setCid(int $value): self
    {
        $this->cid = $value;

        return $this;
    }

    /**
     * 国家ID
     * @param int $value
     * @return $this
     */
    public function setGid(int $value): self
    {
        $this->gid = $value;

        return $this;
    }

    /**
     * 税率，产品价格的百分比
     * @param string $value
     * @return $this
     */
    public function setRevenue(string $value): self
    {
        $this->revenue = $value;

        return $this;
    }

    /**
     * 基本币种
     * @param string $value
     * @return $this
     */
    public function setCurrency(string $value): self
    {
        $this->currency = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setPcs(int $value): self
    {
        $this->pcs = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSpecId(string $value): self
    {
        $this->specId = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setGradePrice(float $value): self
    {
        $this->gradePrice = $value;

        return $this;
    }

    /**
     * O为其他 M为儿童 B 为成人
     * @param string $value
     * @return $this
     */
    public function setTyp(string $value): self
    {
        $this->typ = $value;

        return $this;
    }

    /**
     * 会员系数,为经纪人*该系数
     * @param string $value
     * @return $this
     */
    public function setMemberCoefficient(string $value): self
    {
        $this->memberCoefficient = $value;

        return $this;
    }

    /**
     * 经纪人系数,为一级分销*系数
     * @param string $value
     * @return $this
     */
    public function setBrokerCoefficient(string $value): self
    {
        $this->brokerCoefficient = $value;

        return $this;
    }

    /**
     * 市场价系数,为会员价*该系数
     * @param string $value
     * @return $this
     */
    public function setBazaarCoefficient(string $value): self
    {
        $this->bazaarCoefficient = $value;

        return $this;
    }

    /**
     * 二级分销系数,为一级分销价*系数
     * @param string $value
     * @return $this
     */
    public function setTwoCoefficient(string $value): self
    {
        $this->twoCoefficient = $value;

        return $this;
    }

    /**
     * 成本价格
     * @param float $value
     * @return $this
     */
    public function setCostPrice(float $value): self
    {
        $this->costPrice = $value;

        return $this;
    }

    /**
     * 是否推荐
     * @param int $value
     * @return $this
     */
    public function setIsCommend(int $value): self
    {
        $this->isCommend = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 会员ID
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 会员名
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * 分类ID
     * @return int
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * 类型
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 标题
     * @return string
     */
    public function getSubhead()
    {
        return $this->subhead;
    }

    /**
     * 关键字
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * 品牌
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * 市场价,存币种相应的价格
     * @return float
     */
    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * 会员价格,存币种相应的价格
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 一级分销价，此价格为上传时的原始价格
     * @return mixed
     */
    public function getFirstPrice()
    {
        return $this->firstPrice;
    }

    /**
     * 二级分销价,存币种相应的价格
     * @return mixed
     */
    public function getSecondPrice()
    {
        return $this->secondPrice;
    }

    /**
     * 库存
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * 销量
     * @return int
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * 货号
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 商品编码
     * @return string
     */
    public function getShopCode()
    {
        return $this->shopCode;
    }

    /**
     * 关联商品编码
     * @return string
     */
    public function getRelationCode()
    {
        return $this->relationCode;
    }

    /**
     * 图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * 图片
     * @return string
     */
    public function getPicMore()
    {
        return $this->picMore;
    }

    /**
     * 开始时间类型
     * @return mixed
     */
    public function getStartTimeType()
    {
        return $this->startTimeType;
    }

    /**
     * 开始时间
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * 有效期
     * @return int
     */
    public function getValidTime()
    {
        return $this->validTime;
    }

    /**
     * 体积
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * 重量
     * @return mixed
     */
    public function getCubage()
    {
        return $this->cubage;
    }

    /**
     * 省
     * @return int
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * 市
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * 区
     * @return int
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @return int
     */
    public function getStreetId()
    {
        return $this->streetId;
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
     * 运费
     * @return int
     */
    public function getFreightId()
    {
        return $this->freightId;
    }

    /**
     * 快递方式 卖家承担 买家承担
     * @return mixed
     */
    public function getFreightType()
    {
        return $this->freightType;
    }

    /**
     * 平邮
     * @return mixed
     */
    public function getPostPrice()
    {
        return $this->postPrice;
    }

    /**
     * 快递
     * @return mixed
     */
    public function getExpressPrice()
    {
        return $this->expressPrice;
    }

    /**
     * EMS
     * @return mixed
     */
    public function getEmsPrice()
    {
        return $this->emsPrice;
    }

    /**
     * 点击率
     * @return int
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * 排名
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
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
     * 状态
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 是否上架
     * @return mixed
     */
    public function getIsShelves()
    {
        return $this->isShelves;
    }

    /**
     * 自定义分类
     * @return int
     */
    public function getCustomCatId()
    {
        return $this->customCatId;
    }

    /**
     * 促销ID
     * @return int
     */
    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * 评论得分
     * @return int
     */
    public function getGoodbad()
    {
        return $this->goodbad;
    }

    /**
     * 橱窗推荐
     * @return int
     */
    public function getShopRec()
    {
        return $this->shopRec;
    }

    /**
     * 是否开发票0无1个人发票2增值税普通发票3增值税专用发票
     * @return int
     */
    public function getIsInvoice()
    {
        return $this->isInvoice;
    }

    /**
     * @return mixed
     */
    public function getIsTg()
    {
        return $this->isTg;
    }

    /**
     * 1大商品团购0普通团购
     * @return int
     */
    public function getIsBigtg()
    {
        return $this->isBigtg;
    }

    /**
     * @return string
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * 是否为虚拟商品
     * @return int
     */
    public function getIsVirtual()
    {
        return $this->isVirtual;
    }

    /**
     * 下架原因
     * @return string
     */
    public function getDownReason()
    {
        return $this->downReason;
    }

    /**
     * 付款方式1：在线支付2：货到付款3：线下付款
     * @return mixed
     */
    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     * 页面浏览量
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * 3D视频链接
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * 优惠起始时间
     * @return int
     */
    public function getPromoteStartTime()
    {
        return $this->promoteStartTime;
    }

    /**
     * 优惠结束时间
     * @return int
     */
    public function getPromoteEndTime()
    {
        return $this->promoteEndTime;
    }

    /**
     * 优惠价格
     * @return float
     */
    public function getPromotePrice()
    {
        return $this->promotePrice;
    }

    /**
     * 是否到店取货(1否2是)
     * @return mixed
     */
    public function getIsSelf()
    {
        return $this->isSelf;
    }

    /**
     * 推荐人ID
     * @return int
     */
    public function getIsDist()
    {
        return $this->isDist;
    }

    /**
     * 仓库ID
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * 国家ID
     * @return mixed
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * 税率，产品价格的百分比
     * @return string
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * 基本币种
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getPcs()
    {
        return $this->pcs;
    }

    /**
     * @return string
     */
    public function getSpecId()
    {
        return $this->specId;
    }

    /**
     * @return float
     */
    public function getGradePrice()
    {
        return $this->gradePrice;
    }

    /**
     * O为其他 M为儿童 B 为成人
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * 会员系数,为经纪人*该系数
     * @return mixed
     */
    public function getMemberCoefficient()
    {
        return $this->memberCoefficient;
    }

    /**
     * 经纪人系数,为一级分销*系数
     * @return mixed
     */
    public function getBrokerCoefficient()
    {
        return $this->brokerCoefficient;
    }

    /**
     * 市场价系数,为会员价*该系数
     * @return mixed
     */
    public function getBazaarCoefficient()
    {
        return $this->bazaarCoefficient;
    }

    /**
     * 二级分销系数,为一级分销价*系数
     * @return mixed
     */
    public function getTwoCoefficient()
    {
        return $this->twoCoefficient;
    }

    /**
     * 成本价格
     * @return float
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * 是否推荐
     * @return int
     */
    public function getIsCommend()
    {
        return $this->isCommend;
    }

}
