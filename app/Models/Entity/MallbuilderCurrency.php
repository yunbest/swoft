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
 * @Table(name="mallbuilder_currency")
 * @uses      MallbuilderCurrency
 */
class MallbuilderCurrency extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $currencyName 币种名字
     * @Column(name="currency_name", type="string", length=255)
     * @Required()
     */
    private $currencyName;

    /**
     * @var string $currency 币种代码
     * @Column(name="currency", type="string", length=255)
     * @Required()
     */
    private $currency;

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
     * 币种名字
     * @param string $value
     * @return $this
     */
    public function setCurrencyName(string $value): self
    {
        $this->currencyName = $value;

        return $this;
    }

    /**
     * 币种代码
     * @param string $value
     * @return $this
     */
    public function setCurrency(string $value): self
    {
        $this->currency = $value;

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
     * 币种名字
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * 币种代码
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

}
