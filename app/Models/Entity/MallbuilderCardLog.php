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
 * @Table(name="mallbuilder_card_log")
 * @uses      MallbuilderCardLog
 */
class MallbuilderCardLog extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $idNumber 身份证号码
     * @Column(name="id_number", type="string", length=60)
     * @Required()
     */
    private $idNumber;

    /**
     * @var int $logisticsCode 物流ID
     * @Column(name="logistics_code", type="integer")
     * @Required()
     */
    private $logisticsCode;

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
     * 身份证号码
     * @param string $value
     * @return $this
     */
    public function setIdNumber(string $value): self
    {
        $this->idNumber = $value;

        return $this;
    }

    /**
     * 物流ID
     * @param int $value
     * @return $this
     */
    public function setLogisticsCode(int $value): self
    {
        $this->logisticsCode = $value;

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
     * 身份证号码
     * @return string
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * 物流ID
     * @return int
     */
    public function getLogisticsCode()
    {
        return $this->logisticsCode;
    }

}
