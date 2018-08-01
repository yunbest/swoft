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
 * 订单表

 * @Entity()
 * @Table(name="mallbuilder_product_order")
 * @uses      MallbuilderProductOrder
 */
class MallbuilderProductOrder extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var string $orderId 订单ID
     * @Column(name="order_id", type="string", length=21)
     */
    private $orderId;

    /**
     * @var string $outTradeNo 
     * @Column(name="out_trade_no", type="string", length=255)
     */
    private $outTradeNo;

    /**
     * @var int $buyerId 买家ID
     * @Column(name="buyer_id", type="integer")
     */
    private $buyerId;

    /**
     * @var int $sellerId 卖家ID
     * @Column(name="seller_id", type="integer")
     */
    private $sellerId;

    /**
     * @var string $consignee 收货人姓名
     * @Column(name="consignee", type="string", length=50)
     */
    private $consignee;

    /**
     * @var string $consigneeAddress 收货人地址
     * @Column(name="consignee_address", type="string", length=100)
     */
    private $consigneeAddress;

    /**
     * @var string $consigneeTel 收货人电话
     * @Column(name="consignee_tel", type="string", length=30)
     */
    private $consigneeTel;

    /**
     * @var string $consigneeMobile 收货人手机
     * @Column(name="consignee_mobile", type="string", length=20)
     */
    private $consigneeMobile;

    /**
     * @var float $productPrice 订购价格
     * @Column(name="product_price", type="float")
     */
    private $productPrice;

    /**
     * @var string $logisticsType 物流类型
     * @Column(name="logistics_type", type="string", length=30)
     */
    private $logisticsType;

    /**
     * @var int $wlType 1:默认后台添加类型2：自定义类型
     * @Column(name="wl_type", type="tinyint", default=1)
     */
    private $wlType;

    /**
     * @var string $logisticsImg 自定义物流图片凭证
     * @Column(name="logistics_img", type="string", length=225)
     * @Required()
     */
    private $logisticsImg;

    /**
     * @var float $logisticsPrice 物流价格
     * @Column(name="logistics_price", type="float", default=0)
     */
    private $logisticsPrice;

    /**
     * @var string $logisticsName 物流公司名称
     * @Column(name="logistics_name", type="string", length=30)
     */
    private $logisticsName;

    /**
     * @var string $invoiceNo 物流发货单号
     * @Column(name="invoice_no", type="string", length=50)
     */
    private $invoiceNo;

    /**
     * @var string $takeNo 提货单号
     * @Column(name="take_no", type="string", length=50)
     */
    private $takeNo;

    /**
     * @var string $takeImg 提货单图片
     * @Column(name="take_img", type="string", length=225)
     */
    private $takeImg;

    /**
     * @var string $pickAddress 取货地址
     * @Column(name="pick_address", type="string", length=225)
     */
    private $pickAddress;

    /**
     * @var string $invoiceTitle 
     * @Column(name="invoice_title", type="string", length=255)
     */
    private $invoiceTitle;

    /**
     * @var string $taxNumber 发票纳税识别号
     * @Column(name="tax_number", type="string", length=225)
     */
    private $taxNumber;

    /**
     * @var string $address 发票经营地址
     * @Column(name="address", type="string", length=225)
     */
    private $address;

    /**
     * @var int $tel 发票联系电话
     * @Column(name="tel", type="tinyint")
     */
    private $tel;

    /**
     * @var string $account 发票开户行
     * @Column(name="account", type="string", length=225)
     */
    private $account;

    /**
     * @var string $accountNum 发票开户账号
     * @Column(name="account_num", type="string", length=50)
     */
    private $accountNum;

    /**
     * @var string $paymentName 支付名称
     * @Column(name="payment_name", type="string", length=50)
     */
    private $paymentName;

    /**
     * @var int $status 定单状态
     * @Column(name="status", type="tinyint")
     */
    private $status;

    /**
     * @var int $returnStatus 退货/款状态
     * @Column(name="return_status", type="tinyint", default=0)
     */
    private $returnStatus;

    /**
     * @var int $buyerComment 卖家是否评论
     * @Column(name="buyer_comment", type="tinyint", default=0)
     */
    private $buyerComment;

    /**
     * @var int $sellerComment 买家是否评论
     * @Column(name="seller_comment", type="tinyint", default=0)
     */
    private $sellerComment;

    /**
     * @var string $des 备注
     * @Column(name="des", type="string", length=255)
     */
    private $des;

    /**
     * @var int $createTime 下定单时间
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

    /**
     * @var int $paymentTime 支付时间
     * @Column(name="payment_time", type="integer")
     */
    private $paymentTime;

    /**
     * @var string $paymentImg 支付凭证
     * @Column(name="payment_img", type="string", length=225)
     * @Required()
     */
    private $paymentImg;

    /**
     * @var int $paymentStatus 1:未审核2:已审核
     * @Column(name="payment_status", type="tinyint", default=1)
     */
    private $paymentStatus;

    /**
     * @var int $deliverTime 配送时间
     * @Column(name="deliver_time", type="integer")
     */
    private $deliverTime;

    /**
     * @var int $uptime 更新时间
     * @Column(name="uptime", type="integer")
     */
    private $uptime;

    /**
     * @var int $timeExpand 延长时间
     * @Column(name="time_expand", type="tinyint", default=15)
     */
    private $timeExpand;

    /**
     * @var float $voucherPrice 优惠价格计算
     * @Column(name="voucher_price", type="float")
     * @Required()
     */
    private $voucherPrice;

    /**
     * @var float $discounts 会员折扣
     * @Column(name="discounts", type="decimal", default=0)
     */
    private $discounts;

    /**
     * @var int $isVirtual 是否为虚拟商品 1是，0不是 默认0
     * @Column(name="is_virtual", type="tinyint", default=0)
     */
    private $isVirtual;

    /**
     * @var string $protocolPath 
     * @Column(name="protocol_path", type="string", length=164)
     */
    private $protocolPath;

    /**
     * @var float $exchange 支付时的汇率1cny=?aud
     * @Column(name="exchange", type="float")
     */
    private $exchange;

    /**
     * @var string $currency 买家交易的币种
     * @Column(name="currency", type="string", length=10, default="CNY")
     */
    private $currency;

    /**
     * @var string $tallage 该商品交易时的税?%
     * @Column(name="tallage", type="string", length=5)
     */
    private $tallage;

    /**
     * @var int $economy 买家购买商品时是否是经纪人0:不是1:是
     * @Column(name="economy", type="integer", default=0)
     */
    private $economy;

    /**
     * @var int $addressId 
     * @Column(name="address_id", type="integer")
     * @Required()
     */
    private $addressId;

    /**
     * @var int $balance 
     * @Column(name="balance", type="integer", default=1)
     */
    private $balance;

    /**
     * @var int $isSplited 是否已拆单
     * @Column(name="is_splited", type="tinyint", default=0)
     */
    private $isSplited;

    /**
     * @var float $dprice 商品原价
     * @Column(name="dprice", type="float")
     * @Required()
     */
    private $dprice;

    /**
     * @var int $balanceS 
     * @Column(name="balance_s", type="integer", default=1)
     */
    private $balanceS;

    /**
     * @var string $basicM 商品的基础币种
     * @Column(name="basic_M", type="string", length=10, default="AUD")
     */
    private $basicM;

    /**
     * @var float $costPrice 商家成本总价
     * @Column(name="cost_price", type="decimal", default=0)
     */
    private $costPrice;

    /**
     * @var float $cubage 重量
     * @Column(name="cubage", type="decimal", default=0)
     */
    private $cubage;

    /**
     * @var float $logisticsCostPrice 物流成本价格
     * @Column(name="logistics_cost_price", type="decimal")
     */
    private $logisticsCostPrice;

    /**
     * @var int $exportStatus 导出excel表格状态 1为未导出,2为已导出
     * @Column(name="export_status", type="integer", default=1)
     */
    private $exportStatus;

    /**
     * @var int $paymentType 支付类型，1为余额支付，2为微信支付 3为RoalPay支付
     * @Column(name="payment_type", type="tinyint")
     */
    private $paymentType;

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
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 订单ID
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOutTradeNo(string $value): self
    {
        $this->outTradeNo = $value;

        return $this;
    }

    /**
     * 买家ID
     * @param int $value
     * @return $this
     */
    public function setBuyerId(int $value): self
    {
        $this->buyerId = $value;

        return $this;
    }

    /**
     * 卖家ID
     * @param int $value
     * @return $this
     */
    public function setSellerId(int $value): self
    {
        $this->sellerId = $value;

        return $this;
    }

    /**
     * 收货人姓名
     * @param string $value
     * @return $this
     */
    public function setConsignee(string $value): self
    {
        $this->consignee = $value;

        return $this;
    }

    /**
     * 收货人地址
     * @param string $value
     * @return $this
     */
    public function setConsigneeAddress(string $value): self
    {
        $this->consigneeAddress = $value;

        return $this;
    }

    /**
     * 收货人电话
     * @param string $value
     * @return $this
     */
    public function setConsigneeTel(string $value): self
    {
        $this->consigneeTel = $value;

        return $this;
    }

    /**
     * 收货人手机
     * @param string $value
     * @return $this
     */
    public function setConsigneeMobile(string $value): self
    {
        $this->consigneeMobile = $value;

        return $this;
    }

    /**
     * 订购价格
     * @param float $value
     * @return $this
     */
    public function setProductPrice(float $value): self
    {
        $this->productPrice = $value;

        return $this;
    }

    /**
     * 物流类型
     * @param string $value
     * @return $this
     */
    public function setLogisticsType(string $value): self
    {
        $this->logisticsType = $value;

        return $this;
    }

    /**
     * 1:默认后台添加类型2：自定义类型
     * @param int $value
     * @return $this
     */
    public function setWlType(int $value): self
    {
        $this->wlType = $value;

        return $this;
    }

    /**
     * 自定义物流图片凭证
     * @param string $value
     * @return $this
     */
    public function setLogisticsImg(string $value): self
    {
        $this->logisticsImg = $value;

        return $this;
    }

    /**
     * 物流价格
     * @param float $value
     * @return $this
     */
    public function setLogisticsPrice(float $value): self
    {
        $this->logisticsPrice = $value;

        return $this;
    }

    /**
     * 物流公司名称
     * @param string $value
     * @return $this
     */
    public function setLogisticsName(string $value): self
    {
        $this->logisticsName = $value;

        return $this;
    }

    /**
     * 物流发货单号
     * @param string $value
     * @return $this
     */
    public function setInvoiceNo(string $value): self
    {
        $this->invoiceNo = $value;

        return $this;
    }

    /**
     * 提货单号
     * @param string $value
     * @return $this
     */
    public function setTakeNo(string $value): self
    {
        $this->takeNo = $value;

        return $this;
    }

    /**
     * 提货单图片
     * @param string $value
     * @return $this
     */
    public function setTakeImg(string $value): self
    {
        $this->takeImg = $value;

        return $this;
    }

    /**
     * 取货地址
     * @param string $value
     * @return $this
     */
    public function setPickAddress(string $value): self
    {
        $this->pickAddress = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setInvoiceTitle(string $value): self
    {
        $this->invoiceTitle = $value;

        return $this;
    }

    /**
     * 发票纳税识别号
     * @param string $value
     * @return $this
     */
    public function setTaxNumber(string $value): self
    {
        $this->taxNumber = $value;

        return $this;
    }

    /**
     * 发票经营地址
     * @param string $value
     * @return $this
     */
    public function setAddress(string $value): self
    {
        $this->address = $value;

        return $this;
    }

    /**
     * 发票联系电话
     * @param int $value
     * @return $this
     */
    public function setTel(int $value): self
    {
        $this->tel = $value;

        return $this;
    }

    /**
     * 发票开户行
     * @param string $value
     * @return $this
     */
    public function setAccount(string $value): self
    {
        $this->account = $value;

        return $this;
    }

    /**
     * 发票开户账号
     * @param string $value
     * @return $this
     */
    public function setAccountNum(string $value): self
    {
        $this->accountNum = $value;

        return $this;
    }

    /**
     * 支付名称
     * @param string $value
     * @return $this
     */
    public function setPaymentName(string $value): self
    {
        $this->paymentName = $value;

        return $this;
    }

    /**
     * 定单状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 退货/款状态
     * @param int $value
     * @return $this
     */
    public function setReturnStatus(int $value): self
    {
        $this->returnStatus = $value;

        return $this;
    }

    /**
     * 卖家是否评论
     * @param int $value
     * @return $this
     */
    public function setBuyerComment(int $value): self
    {
        $this->buyerComment = $value;

        return $this;
    }

    /**
     * 买家是否评论
     * @param int $value
     * @return $this
     */
    public function setSellerComment(int $value): self
    {
        $this->sellerComment = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setDes(string $value): self
    {
        $this->des = $value;

        return $this;
    }

    /**
     * 下定单时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 支付时间
     * @param int $value
     * @return $this
     */
    public function setPaymentTime(int $value): self
    {
        $this->paymentTime = $value;

        return $this;
    }

    /**
     * 支付凭证
     * @param string $value
     * @return $this
     */
    public function setPaymentImg(string $value): self
    {
        $this->paymentImg = $value;

        return $this;
    }

    /**
     * 1:未审核2:已审核
     * @param int $value
     * @return $this
     */
    public function setPaymentStatus(int $value): self
    {
        $this->paymentStatus = $value;

        return $this;
    }

    /**
     * 配送时间
     * @param int $value
     * @return $this
     */
    public function setDeliverTime(int $value): self
    {
        $this->deliverTime = $value;

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
     * 延长时间
     * @param int $value
     * @return $this
     */
    public function setTimeExpand(int $value): self
    {
        $this->timeExpand = $value;

        return $this;
    }

    /**
     * 优惠价格计算
     * @param float $value
     * @return $this
     */
    public function setVoucherPrice(float $value): self
    {
        $this->voucherPrice = $value;

        return $this;
    }

    /**
     * 会员折扣
     * @param float $value
     * @return $this
     */
    public function setDiscounts(float $value): self
    {
        $this->discounts = $value;

        return $this;
    }

    /**
     * 是否为虚拟商品 1是，0不是 默认0
     * @param int $value
     * @return $this
     */
    public function setIsVirtual(int $value): self
    {
        $this->isVirtual = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProtocolPath(string $value): self
    {
        $this->protocolPath = $value;

        return $this;
    }

    /**
     * 支付时的汇率1cny=?aud
     * @param float $value
     * @return $this
     */
    public function setExchange(float $value): self
    {
        $this->exchange = $value;

        return $this;
    }

    /**
     * 买家交易的币种
     * @param string $value
     * @return $this
     */
    public function setCurrency(string $value): self
    {
        $this->currency = $value;

        return $this;
    }

    /**
     * 该商品交易时的税?%
     * @param string $value
     * @return $this
     */
    public function setTallage(string $value): self
    {
        $this->tallage = $value;

        return $this;
    }

    /**
     * 买家购买商品时是否是经纪人0:不是1:是
     * @param int $value
     * @return $this
     */
    public function setEconomy(int $value): self
    {
        $this->economy = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAddressId(int $value): self
    {
        $this->addressId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setBalance(int $value): self
    {
        $this->balance = $value;

        return $this;
    }

    /**
     * 是否已拆单
     * @param int $value
     * @return $this
     */
    public function setIsSplited(int $value): self
    {
        $this->isSplited = $value;

        return $this;
    }

    /**
     * 商品原价
     * @param float $value
     * @return $this
     */
    public function setDprice(float $value): self
    {
        $this->dprice = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setBalanceS(int $value): self
    {
        $this->balanceS = $value;

        return $this;
    }

    /**
     * 商品的基础币种
     * @param string $value
     * @return $this
     */
    public function setBasicM(string $value): self
    {
        $this->basicM = $value;

        return $this;
    }

    /**
     * 商家成本总价
     * @param float $value
     * @return $this
     */
    public function setCostPrice(float $value): self
    {
        $this->costPrice = $value;

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
     * 物流成本价格
     * @param float $value
     * @return $this
     */
    public function setLogisticsCostPrice(float $value): self
    {
        $this->logisticsCostPrice = $value;

        return $this;
    }

    /**
     * 导出excel表格状态 1为未导出,2为已导出
     * @param int $value
     * @return $this
     */
    public function setExportStatus(int $value): self
    {
        $this->exportStatus = $value;

        return $this;
    }

    /**
     * 支付类型，1为余额支付，2为微信支付 3为RoalPay支付
     * @param int $value
     * @return $this
     */
    public function setPaymentType(int $value): self
    {
        $this->paymentType = $value;

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
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 订单ID
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    /**
     * 买家ID
     * @return int
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * 卖家ID
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * 收货人姓名
     * @return string
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * 收货人地址
     * @return string
     */
    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    /**
     * 收货人电话
     * @return string
     */
    public function getConsigneeTel()
    {
        return $this->consigneeTel;
    }

    /**
     * 收货人手机
     * @return string
     */
    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

    /**
     * 订购价格
     * @return float
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * 物流类型
     * @return string
     */
    public function getLogisticsType()
    {
        return $this->logisticsType;
    }

    /**
     * 1:默认后台添加类型2：自定义类型
     * @return mixed
     */
    public function getWlType()
    {
        return $this->wlType;
    }

    /**
     * 自定义物流图片凭证
     * @return string
     */
    public function getLogisticsImg()
    {
        return $this->logisticsImg;
    }

    /**
     * 物流价格
     * @return float
     */
    public function getLogisticsPrice()
    {
        return $this->logisticsPrice;
    }

    /**
     * 物流公司名称
     * @return string
     */
    public function getLogisticsName()
    {
        return $this->logisticsName;
    }

    /**
     * 物流发货单号
     * @return string
     */
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * 提货单号
     * @return string
     */
    public function getTakeNo()
    {
        return $this->takeNo;
    }

    /**
     * 提货单图片
     * @return string
     */
    public function getTakeImg()
    {
        return $this->takeImg;
    }

    /**
     * 取货地址
     * @return string
     */
    public function getPickAddress()
    {
        return $this->pickAddress;
    }

    /**
     * @return string
     */
    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    /**
     * 发票纳税识别号
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * 发票经营地址
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 发票联系电话
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * 发票开户行
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * 发票开户账号
     * @return string
     */
    public function getAccountNum()
    {
        return $this->accountNum;
    }

    /**
     * 支付名称
     * @return string
     */
    public function getPaymentName()
    {
        return $this->paymentName;
    }

    /**
     * 定单状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 退货/款状态
     * @return int
     */
    public function getReturnStatus()
    {
        return $this->returnStatus;
    }

    /**
     * 卖家是否评论
     * @return int
     */
    public function getBuyerComment()
    {
        return $this->buyerComment;
    }

    /**
     * 买家是否评论
     * @return int
     */
    public function getSellerComment()
    {
        return $this->sellerComment;
    }

    /**
     * 备注
     * @return string
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * 下定单时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 支付时间
     * @return int
     */
    public function getPaymentTime()
    {
        return $this->paymentTime;
    }

    /**
     * 支付凭证
     * @return string
     */
    public function getPaymentImg()
    {
        return $this->paymentImg;
    }

    /**
     * 1:未审核2:已审核
     * @return mixed
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * 配送时间
     * @return int
     */
    public function getDeliverTime()
    {
        return $this->deliverTime;
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
     * 延长时间
     * @return mixed
     */
    public function getTimeExpand()
    {
        return $this->timeExpand;
    }

    /**
     * 优惠价格计算
     * @return float
     */
    public function getVoucherPrice()
    {
        return $this->voucherPrice;
    }

    /**
     * 会员折扣
     * @return mixed
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * 是否为虚拟商品 1是，0不是 默认0
     * @return int
     */
    public function getIsVirtual()
    {
        return $this->isVirtual;
    }

    /**
     * @return string
     */
    public function getProtocolPath()
    {
        return $this->protocolPath;
    }

    /**
     * 支付时的汇率1cny=?aud
     * @return float
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     * 买家交易的币种
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * 该商品交易时的税?%
     * @return string
     */
    public function getTallage()
    {
        return $this->tallage;
    }

    /**
     * 买家购买商品时是否是经纪人0:不是1:是
     * @return int
     */
    public function getEconomy()
    {
        return $this->economy;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * 是否已拆单
     * @return int
     */
    public function getIsSplited()
    {
        return $this->isSplited;
    }

    /**
     * 商品原价
     * @return float
     */
    public function getDprice()
    {
        return $this->dprice;
    }

    /**
     * @return mixed
     */
    public function getBalanceS()
    {
        return $this->balanceS;
    }

    /**
     * 商品的基础币种
     * @return mixed
     */
    public function getBasicM()
    {
        return $this->basicM;
    }

    /**
     * 商家成本总价
     * @return mixed
     */
    public function getCostPrice()
    {
        return $this->costPrice;
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
     * 物流成本价格
     * @return float
     */
    public function getLogisticsCostPrice()
    {
        return $this->logisticsCostPrice;
    }

    /**
     * 导出excel表格状态 1为未导出,2为已导出
     * @return mixed
     */
    public function getExportStatus()
    {
        return $this->exportStatus;
    }

    /**
     * 支付类型，1为余额支付，2为微信支付 3为RoalPay支付
     * @return int
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

}
