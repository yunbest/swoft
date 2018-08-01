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
 * 共享商品信息表

 * @Entity()
 * @Table(name="mallbuilder_sns_shareproduct_info")
 * @uses      MallbuilderSnsShareproductInfo
 */
class MallbuilderSnsShareproductInfo extends Model
{
    /**
     * @var int $pid 商品ID
     * @Id()
     * @Column(name="pid", type="integer")
     */
    private $pid;

    /**
     * @var string $pname 商品名
     * @Column(name="pname", type="string", length=100)
     * @Required()
     */
    private $pname;

    /**
     * @var string $image 商品图片
     * @Column(name="image", type="string", length=100)
     */
    private $image;

    /**
     * @var float $price 商品价格
     * @Column(name="price", type="decimal", default=0)
     */
    private $price;

    /**
     * @var int $shopid 店铺ID
     * @Column(name="shopid", type="integer")
     * @Required()
     */
    private $shopid;

    /**
     * @var string $uname 会员名称
     * @Column(name="uname", type="string", length=100)
     * @Required()
     */
    private $uname;

    /**
     * @var int $addtime 添加时间
     * @Column(name="addtime", type="integer")
     * @Required()
     */
    private $addtime;

    /**
     * @var int $likenum 喜欢数
     * @Column(name="likenum", type="integer", default=0)
     */
    private $likenum;

    /**
     * @var string $likemember 喜欢过的会员ID，用逗号分隔
     * @Column(name="likemember", type="text", length=65535)
     */
    private $likemember;

    /**
     * @var int $collectnum 收藏数
     * @Column(name="collectnum", type="integer", default=0)
     */
    private $collectnum;

    /**
     * 商品ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value)
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 商品名
     * @param string $value
     * @return $this
     */
    public function setPname(string $value): self
    {
        $this->pname = $value;

        return $this;
    }

    /**
     * 商品图片
     * @param string $value
     * @return $this
     */
    public function setImage(string $value): self
    {
        $this->image = $value;

        return $this;
    }

    /**
     * 商品价格
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 店铺ID
     * @param int $value
     * @return $this
     */
    public function setShopid(int $value): self
    {
        $this->shopid = $value;

        return $this;
    }

    /**
     * 会员名称
     * @param string $value
     * @return $this
     */
    public function setUname(string $value): self
    {
        $this->uname = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param int $value
     * @return $this
     */
    public function setAddtime(int $value): self
    {
        $this->addtime = $value;

        return $this;
    }

    /**
     * 喜欢数
     * @param int $value
     * @return $this
     */
    public function setLikenum(int $value): self
    {
        $this->likenum = $value;

        return $this;
    }

    /**
     * 喜欢过的会员ID，用逗号分隔
     * @param string $value
     * @return $this
     */
    public function setLikemember(string $value): self
    {
        $this->likemember = $value;

        return $this;
    }

    /**
     * 收藏数
     * @param int $value
     * @return $this
     */
    public function setCollectnum(int $value): self
    {
        $this->collectnum = $value;

        return $this;
    }

    /**
     * 商品ID
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 商品名
     * @return string
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * 商品图片
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * 商品价格
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 店铺ID
     * @return int
     */
    public function getShopid()
    {
        return $this->shopid;
    }

    /**
     * 会员名称
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * 添加时间
     * @return int
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * 喜欢数
     * @return int
     */
    public function getLikenum()
    {
        return $this->likenum;
    }

    /**
     * 喜欢过的会员ID，用逗号分隔
     * @return string
     */
    public function getLikemember()
    {
        return $this->likemember;
    }

    /**
     * 收藏数
     * @return int
     */
    public function getCollectnum()
    {
        return $this->collectnum;
    }

}
