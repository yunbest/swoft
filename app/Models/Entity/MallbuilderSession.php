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
 * @Table(name="mallbuilder_session")
 * @uses      MallbuilderSession
 */
class MallbuilderSession extends Model
{
    /**
     * @var string $sesskey 
     * @Id()
     * @Column(name="sesskey", type="char", length=32)
     */
    private $sesskey;

    /**
     * @var int $expiry 
     * @Column(name="expiry", type="integer")
     * @Required()
     */
    private $expiry;

    /**
     * @var string $value 
     * @Column(name="value", type="text", length=65535)
     * @Required()
     */
    private $value;

    /**
     * @param string $value
     * @return $this
     */
    public function setSesskey(string $value)
    {
        $this->sesskey = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setExpiry(int $value): self
    {
        $this->expiry = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSesskey()
    {
        return $this->sesskey;
    }

    /**
     * @return int
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
