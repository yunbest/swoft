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
 * 兑换订单表

 * @Entity()
 * @Table(name="mallbuilder_points_order")
 * @uses      MallbuilderPointsOrder
 */
class MallbuilderPointsOrder extends Model
{
    /**
     * @var int $id 兑换订单编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 兑换订单编号
     * @Column(name="order_id", type="string", length=100)
     * @Required()
     */
    private $orderId;

    /**
     * @var int $buyerId 兑换会员id
     * @Column(name="buyer_id", type="integer")
     * @Required()
     */
    private $buyerId;

    /**
     * @var string $buyerName 兑换会员姓名
     * @Column(name="buyer_name", type="string", length=50)
     * @Required()
     */
    private $buyerName;

    /**
     * @var int $productId 产品ID
     * @Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var string $productName 产品名
     * @Column(name="product_name", type="string", length=255)
     */
    private $productName;

    /**
     * @var string $pic 产品图片
     * @Column(name="pic", type="string", length=255)
     */
    private $pic;

    /**
     * @var string $contact 联系人
     * @Column(name="contact", type="string", length=30)
     */
    private $contact;

    /**
     * @var string $address 地址
     * @Column(name="address", type="string", length=200)
     */
    private $address;

    /**
     * @var string $tel 电话
     * @Column(name="tel", type="string", length=20)
     */
    private $tel;

    /**
     * @var int $createTime 兑换订单生成时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $shippingTime 发货时间
     * @Column(name="shipping_time", type="integer")
     */
    private $shippingTime;

    /**
     * @var int $finnshedTime 订单完成时间
     * @Column(name="finnshed_time", type="integer")
     */
    private $finnshedTime;

    /**
     * @var int $allpoint 兑换总积分
     * @Column(name="allpoint", type="integer", default=0)
     */
    private $allpoint;

    /**
     * @var int $status 订单状态：10(默认):待确定;20:已发货;30已完成;0已取消
     * @Column(name="status", type="integer", default=10)
     */
    private $status;

    /**
     * @var string $shippingName 发货人
     * @Column(name="shipping_name", type="string", length=50)
     */
    private $shippingName;

    /**
     * @var string $shippingAddress 发货地址
     * @Column(name="shipping_address", type="string", length=255)
     */
    private $shippingAddress;

    /**
     * @var string $shippingTel 联系电话
     * @Column(name="shipping_tel", type="string", length=20)
     */
    private $shippingTel;

    /**
     * @var string $shippingCompany 快递名
     * @Column(name="shipping_company", type="string", length=50)
     */
    private $shippingCompany;

    /**
     * @var string $shippingCode 快递单号
     * @Column(name="shipping_code", type="string", length=50)
     */
    private $shippingCode;

    /**
     * @var string $adminRemark 备注
     * @Column(name="admin_remark", type="string", length=255)
     */
    private $adminRemark;

    /**
     * 兑换订单编号
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 兑换订单编号
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 兑换会员id
     * @param int $value
     * @return $this
     */
    public function setBuyerId(int $value): self
    {
        $this->buyerId = $value;

        return $this;
    }

    /**
     * 兑换会员姓名
     * @param string $value
     * @return $this
     */
    public function setBuyerName(string $value): self
    {
        $this->buyerName = $value;

        return $this;
    }

    /**
     * 产品ID
     * @param int $value
     * @return $this
     */
    public function setProductId(int $value): self
    {
        $this->productId = $value;

        return $this;
    }

    /**
     * 产品名
     * @param string $value
     * @return $this
     */
    public function setProductName(string $value): self
    {
        $this->productName = $value;

        return $this;
    }

    /**
     * 产品图片
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * 联系人
     * @param string $value
     * @return $this
     */
    public function setContact(string $value): self
    {
        $this->contact = $value;

        return $this;
    }

    /**
     * 地址
     * @param string $value
     * @return $this
     */
    public function setAddress(string $value): self
    {
        $this->address = $value;

        return $this;
    }

    /**
     * 电话
     * @param string $value
     * @return $this
     */
    public function setTel(string $value): self
    {
        $this->tel = $value;

        return $this;
    }

    /**
     * 兑换订单生成时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 发货时间
     * @param int $value
     * @return $this
     */
    public function setShippingTime(int $value): self
    {
        $this->shippingTime = $value;

        return $this;
    }

    /**
     * 订单完成时间
     * @param int $value
     * @return $this
     */
    public function setFinnshedTime(int $value): self
    {
        $this->finnshedTime = $value;

        return $this;
    }

    /**
     * 兑换总积分
     * @param int $value
     * @return $this
     */
    public function setAllpoint(int $value): self
    {
        $this->allpoint = $value;

        return $this;
    }

    /**
     * 订单状态：10(默认):待确定;20:已发货;30已完成;0已取消
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 发货人
     * @param string $value
     * @return $this
     */
    public function setShippingName(string $value): self
    {
        $this->shippingName = $value;

        return $this;
    }

    /**
     * 发货地址
     * @param string $value
     * @return $this
     */
    public function setShippingAddress(string $value): self
    {
        $this->shippingAddress = $value;

        return $this;
    }

    /**
     * 联系电话
     * @param string $value
     * @return $this
     */
    public function setShippingTel(string $value): self
    {
        $this->shippingTel = $value;

        return $this;
    }

    /**
     * 快递名
     * @param string $value
     * @return $this
     */
    public function setShippingCompany(string $value): self
    {
        $this->shippingCompany = $value;

        return $this;
    }

    /**
     * 快递单号
     * @param string $value
     * @return $this
     */
    public function setShippingCode(string $value): self
    {
        $this->shippingCode = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setAdminRemark(string $value): self
    {
        $this->adminRemark = $value;

        return $this;
    }

    /**
     * 兑换订单编号
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 兑换订单编号
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 兑换会员id
     * @return int
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * 兑换会员姓名
     * @return string
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * 产品ID
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * 产品名
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * 产品图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * 联系人
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 地址
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 电话
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * 兑换订单生成时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 发货时间
     * @return int
     */
    public function getShippingTime()
    {
        return $this->shippingTime;
    }

    /**
     * 订单完成时间
     * @return int
     */
    public function getFinnshedTime()
    {
        return $this->finnshedTime;
    }

    /**
     * 兑换总积分
     * @return int
     */
    public function getAllpoint()
    {
        return $this->allpoint;
    }

    /**
     * 订单状态：10(默认):待确定;20:已发货;30已完成;0已取消
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 发货人
     * @return string
     */
    public function getShippingName()
    {
        return $this->shippingName;
    }

    /**
     * 发货地址
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * 联系电话
     * @return string
     */
    public function getShippingTel()
    {
        return $this->shippingTel;
    }

    /**
     * 快递名
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->shippingCompany;
    }

    /**
     * 快递单号
     * @return string
     */
    public function getShippingCode()
    {
        return $this->shippingCode;
    }

    /**
     * 备注
     * @return string
     */
    public function getAdminRemark()
    {
        return $this->adminRemark;
    }

}
