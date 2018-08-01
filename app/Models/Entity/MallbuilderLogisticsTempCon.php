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
 * 自定义物流模板内容表

 * @Entity()
 * @Table(name="mallbuilder_logistics_temp_con")
 * @uses      MallbuilderLogisticsTempCon
 */
class MallbuilderLogisticsTempCon extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $tempId 自定义物流模板ID
     * @Column(name="temp_id", type="integer")
     */
    private $tempId;

    /**
     * @var string $logisticsType EMS,平邮,快递
     * @Column(name="logistics_type", type="string", length=50)
     */
    private $logisticsType;

    /**
     * @var int $defaultNum 默认数量
     * @Column(name="default_num", type="smallint")
     */
    private $defaultNum;

    /**
     * @var float $defaultPrice 默认运费
     * @Column(name="default_price", type="float")
     */
    private $defaultPrice;

    /**
     * @var int $addNum 增加数量
     * @Column(name="add_num", type="smallint")
     */
    private $addNum;

    /**
     * @var float $addPrice 增加运费
     * @Column(name="add_price", type="float")
     */
    private $addPrice;

    /**
     * @var string $defineCitys 默认城市
     * @Column(name="define_citys", type="text", length=65535)
     */
    private $defineCitys;

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
     * 自定义物流模板ID
     * @param int $value
     * @return $this
     */
    public function setTempId(int $value): self
    {
        $this->tempId = $value;

        return $this;
    }

    /**
     * EMS,平邮,快递
     * @param string $value
     * @return $this
     */
    public function setLogisticsType(string $value): self
    {
        $this->logisticsType = $value;

        return $this;
    }

    /**
     * 默认数量
     * @param int $value
     * @return $this
     */
    public function setDefaultNum(int $value): self
    {
        $this->defaultNum = $value;

        return $this;
    }

    /**
     * 默认运费
     * @param float $value
     * @return $this
     */
    public function setDefaultPrice(float $value): self
    {
        $this->defaultPrice = $value;

        return $this;
    }

    /**
     * 增加数量
     * @param int $value
     * @return $this
     */
    public function setAddNum(int $value): self
    {
        $this->addNum = $value;

        return $this;
    }

    /**
     * 增加运费
     * @param float $value
     * @return $this
     */
    public function setAddPrice(float $value): self
    {
        $this->addPrice = $value;

        return $this;
    }

    /**
     * 默认城市
     * @param string $value
     * @return $this
     */
    public function setDefineCitys(string $value): self
    {
        $this->defineCitys = $value;

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
     * 自定义物流模板ID
     * @return int
     */
    public function getTempId()
    {
        return $this->tempId;
    }

    /**
     * EMS,平邮,快递
     * @return string
     */
    public function getLogisticsType()
    {
        return $this->logisticsType;
    }

    /**
     * 默认数量
     * @return int
     */
    public function getDefaultNum()
    {
        return $this->defaultNum;
    }

    /**
     * 默认运费
     * @return float
     */
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * 增加数量
     * @return int
     */
    public function getAddNum()
    {
        return $this->addNum;
    }

    /**
     * 增加运费
     * @return float
     */
    public function getAddPrice()
    {
        return $this->addPrice;
    }

    /**
     * 默认城市
     * @return string
     */
    public function getDefineCitys()
    {
        return $this->defineCitys;
    }

}
