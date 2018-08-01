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
 * @Entity()
 * @Table(name="mallbuilder_rates")
 * @uses      MallbuilderRates
 */
class MallbuilderRates extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="tinyint")
     */
    private $id;

    /**
     * @var string $rate 澳洲汇率
     * @Column(name="rate", type="string", length=20)
     */
    private $rate;

    /**
     * @var int $expireIn 过期时间
     * @Column(name="expire_in", type="integer")
     */
    private $expireIn;

    /**
     * @var string $currency 基本币种
     * @Column(name="currency", type="string", length=20)
     */
    private $currency;

    /**
     * @var int $sellerId 店铺ID
     * @Column(name="seller_id", type="integer")
     */
    private $sellerId;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 澳洲汇率
     * @param string $value
     * @return $this
     */
    public function setRate(string $value): self
    {
        $this->rate = $value;

        return $this;
    }

    /**
     * 过期时间
     * @param int $value
     * @return $this
     */
    public function setExpireIn(int $value): self
    {
        $this->expireIn = $value;

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
     * 店铺ID
     * @param int $value
     * @return $this
     */
    public function setSellerId(int $value): self
    {
        $this->sellerId = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 澳洲汇率
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * 过期时间
     * @return int
     */
    public function getExpireIn()
    {
        return $this->expireIn;
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
     * 店铺ID
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

}
