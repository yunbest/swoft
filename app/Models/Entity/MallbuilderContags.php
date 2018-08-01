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
 * @Table(name="mallbuilder_contags")
 * @uses      MallbuilderContags
 */
class MallbuilderContags extends Model
{
    /**
     * @var string $tagname 
     * @Column(name="tagname", type="char", length=20)
     * @Required()
     */
    private $tagname;

    /**
     * @var int $tid 
     * @Column(name="tid", type="integer")
     * @Required()
     */
    private $tid;

    /**
     * @var int $type 
     * @Column(name="type", type="tinyint")
     */
    private $type;

    /**
     * @param string $value
     * @return $this
     */
    public function setTagname(string $value): self
    {
        $this->tagname = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setTid(int $value): self
    {
        $this->tid = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getTagname()
    {
        return $this->tagname;
    }

    /**
     * @return int
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

}
