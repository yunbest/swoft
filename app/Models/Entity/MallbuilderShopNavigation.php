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
 * 卖家店铺导航信息表

 * @Entity()
 * @Table(name="mallbuilder_shop_navigation")
 * @uses      MallbuilderShopNavigation
 */
class MallbuilderShopNavigation extends Model
{
    /**
     * @var int $id 导航ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $title 导航名称
     * @Column(name="title", type="string", length=50)
     * @Required()
     */
    private $title;

    /**
     * @var int $shopId 卖家店铺ID
     * @Column(name="shop_id", type="integer", default=0)
     */
    private $shopId;

    /**
     * @var string $content 导航内容
     * @Column(name="content", type="text", length=65535)
     */
    private $content;

    /**
     * @var int $sort 导航排序
     * @Column(name="sort", type="tinyint", default=0)
     */
    private $sort;

    /**
     * @var int $ifShow 导航是否显示
     * @Column(name="if_show", type="tinyint", default=0)
     */
    private $ifShow;

    /**
     * @var int $addTime 导航
     * @Column(name="add_time", type="integer")
     * @Required()
     */
    private $addTime;

    /**
     * @var string $url 店铺导航的外链URL
     * @Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var int $newOpen 店铺导航外链是否在新窗口打开：0不开新窗口1开新窗口，默认是0
     * @Column(name="new_open", type="tinyint", default=0)
     */
    private $newOpen;

    /**
     * 导航ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 导航名称
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 卖家店铺ID
     * @param int $value
     * @return $this
     */
    public function setShopId(int $value): self
    {
        $this->shopId = $value;

        return $this;
    }

    /**
     * 导航内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 导航排序
     * @param int $value
     * @return $this
     */
    public function setSort(int $value): self
    {
        $this->sort = $value;

        return $this;
    }

    /**
     * 导航是否显示
     * @param int $value
     * @return $this
     */
    public function setIfShow(int $value): self
    {
        $this->ifShow = $value;

        return $this;
    }

    /**
     * 导航
     * @param int $value
     * @return $this
     */
    public function setAddTime(int $value): self
    {
        $this->addTime = $value;

        return $this;
    }

    /**
     * 店铺导航的外链URL
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * 店铺导航外链是否在新窗口打开：0不开新窗口1开新窗口，默认是0
     * @param int $value
     * @return $this
     */
    public function setNewOpen(int $value): self
    {
        $this->newOpen = $value;

        return $this;
    }

    /**
     * 导航ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 导航名称
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 卖家店铺ID
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * 导航内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 导航排序
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * 导航是否显示
     * @return int
     */
    public function getIfShow()
    {
        return $this->ifShow;
    }

    /**
     * 导航
     * @return int
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * 店铺导航的外链URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 店铺导航外链是否在新窗口打开：0不开新窗口1开新窗口，默认是0
     * @return int
     */
    public function getNewOpen()
    {
        return $this->newOpen;
    }

}
