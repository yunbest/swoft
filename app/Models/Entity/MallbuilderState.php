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
 * 国家表

 * @Entity()
 * @Table(name="mallbuilder_state")
 * @uses      MallbuilderState
 */
class MallbuilderState extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 国家
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var string $banner 国旗
     * @Column(name="banner", type="string", length=100)
     * @Required()
     */
    private $banner;

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
     * 国家
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 国旗
     * @param string $value
     * @return $this
     */
    public function setBanner(string $value): self
    {
        $this->banner = $value;

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
     * 国家
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 国旗
     * @return string
     */
    public function getBanner()
    {
        return $this->banner;
    }

}
