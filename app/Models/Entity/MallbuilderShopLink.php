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
 * 店铺自定义友情链接表

 * @Entity()
 * @Table(name="mallbuilder_shop_link")
 * @uses      MallbuilderShopLink
 */
class MallbuilderShopLink extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $shopId 店铺ID
     * @Column(name="shop_id", type="integer")
     * @Required()
     */
    private $shopId;

    /**
     * @var string $name 名称
     * @Column(name="name", type="string", length=40)
     * @Required()
     */
    private $name;

    /**
     * @var string $url 地址
     * @Column(name="url", type="string", length=100)
     * @Required()
     */
    private $url;

    /**
     * @var string $desc 描述
     * @Column(name="desc", type="string", length=100)
     */
    private $desc;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=0)
     */
    private $displayorder;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

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
     * 店铺ID
     * @param int $value
     * @return $this
     */
    public function setShopId(int $value): self
    {
        $this->shopId = $value;

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
     * 地址
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

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
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 店铺ID
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
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
     * 地址
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 描述
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * 排序
     * @return int
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
