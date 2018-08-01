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
 * @Table(name="pay_service_fee")
 * @uses      PayServiceFee
 */
class PayServiceFee extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var float $feeRates 
     * @Column(name="fee_rates", type="float", default=0)
     */
    private $feeRates;

    /**
     * @var int $feeMin 
     * @Column(name="fee_min", type="integer", default=0)
     */
    private $feeMin;

    /**
     * @var int $feeMax 
     * @Column(name="fee_max", type="integer", default=0)
     */
    private $feeMax;

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
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setFeeRates(float $value): self
    {
        $this->feeRates = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFeeMin(int $value): self
    {
        $this->feeMin = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFeeMax(int $value): self
    {
        $this->feeMax = $value;

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFeeRates()
    {
        return $this->feeRates;
    }

    /**
     * @return int
     */
    public function getFeeMin()
    {
        return $this->feeMin;
    }

    /**
     * @return int
     */
    public function getFeeMax()
    {
        return $this->feeMax;
    }

}
