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
 * 保证金表

 * @Entity()
 * @Table(name="mallbuilder_shop_earnest")
 * @uses      MallbuilderShopEarnest
 */
class MallbuilderShopEarnest extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $shopId 会员ID
     * @Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var float $money 保证金
     * @Column(name="money", type="float")
     */
    private $money;

    /**
     * @var string $content 保证金
     * @Column(name="content", type="text", length=65535)
     */
    private $content;

    /**
     * @var string $admin 管理员
     * @Column(name="admin", type="string", length=30)
     */
    private $admin;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

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
    public function setShopId(int $value): self
    {
        $this->shopId = $value;

        return $this;
    }

    /**
     * 保证金
     * @param float $value
     * @return $this
     */
    public function setMoney(float $value): self
    {
        $this->money = $value;

        return $this;
    }

    /**
     * 保证金
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 管理员
     * @param string $value
     * @return $this
     */
    public function setAdmin(string $value): self
    {
        $this->admin = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

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
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * 保证金
     * @return float
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * 保证金
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 管理员
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

}
