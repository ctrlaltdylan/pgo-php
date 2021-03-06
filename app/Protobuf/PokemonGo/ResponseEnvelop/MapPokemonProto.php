<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : pokemongo.proto
 */


namespace Protobuf\PokemonGo\ResponseEnvelop;

/**
 * Protobuf message : pokemongo.ResponseEnvelop.MapPokemonProto
 */
class MapPokemonProto extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * SpawnpointId required string = 1
     *
     * @var string
     */
    protected $SpawnpointId = null;

    /**
     * EncounterId required uint64 = 2
     *
     * @var int
     */
    protected $EncounterId = null;

    /**
     * PokedexTypeId required int32 = 3
     *
     * @var int
     */
    protected $PokedexTypeId = null;

    /**
     * ExpirationTimeMs required int64 = 4
     *
     * @var int
     */
    protected $ExpirationTimeMs = null;

    /**
     * Latitude required double = 5
     *
     * @var float
     */
    protected $Latitude = null;

    /**
     * Longitude required double = 6
     *
     * @var float
     */
    protected $Longitude = null;

    /**
     * Check if 'SpawnpointId' has a value
     *
     * @return bool
     */
    public function hasSpawnpointId()
    {
        return $this->SpawnpointId !== null;
    }

    /**
     * Get 'SpawnpointId' value
     *
     * @return string
     */
    public function getSpawnpointId()
    {
        return $this->SpawnpointId;
    }

    /**
     * Set 'SpawnpointId' value
     *
     * @param string $value
     */
    public function setSpawnpointId($value)
    {
        $this->SpawnpointId = $value;
    }

    /**
     * Check if 'EncounterId' has a value
     *
     * @return bool
     */
    public function hasEncounterId()
    {
        return $this->EncounterId !== null;
    }

    /**
     * Get 'EncounterId' value
     *
     * @return int
     */
    public function getEncounterId()
    {
        return $this->EncounterId;
    }

    /**
     * Set 'EncounterId' value
     *
     * @param int $value
     */
    public function setEncounterId($value)
    {
        $this->EncounterId = $value;
    }

    /**
     * Check if 'PokedexTypeId' has a value
     *
     * @return bool
     */
    public function hasPokedexTypeId()
    {
        return $this->PokedexTypeId !== null;
    }

    /**
     * Get 'PokedexTypeId' value
     *
     * @return int
     */
    public function getPokedexTypeId()
    {
        return $this->PokedexTypeId;
    }

    /**
     * Set 'PokedexTypeId' value
     *
     * @param int $value
     */
    public function setPokedexTypeId($value)
    {
        $this->PokedexTypeId = $value;
    }

    /**
     * Check if 'ExpirationTimeMs' has a value
     *
     * @return bool
     */
    public function hasExpirationTimeMs()
    {
        return $this->ExpirationTimeMs !== null;
    }

    /**
     * Get 'ExpirationTimeMs' value
     *
     * @return int
     */
    public function getExpirationTimeMs()
    {
        return $this->ExpirationTimeMs;
    }

    /**
     * Set 'ExpirationTimeMs' value
     *
     * @param int $value
     */
    public function setExpirationTimeMs($value)
    {
        $this->ExpirationTimeMs = $value;
    }

    /**
     * Check if 'Latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->Latitude !== null;
    }

    /**
     * Get 'Latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * Set 'Latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value)
    {
        $this->Latitude = $value;
    }

    /**
     * Check if 'Longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->Longitude !== null;
    }

    /**
     * Get 'Longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * Set 'Longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value)
    {
        $this->Longitude = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['SpawnpointId'])) {
            throw new \InvalidArgumentException('Field "SpawnpointId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['EncounterId'])) {
            throw new \InvalidArgumentException('Field "EncounterId" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['PokedexTypeId'])) {
            throw new \InvalidArgumentException('Field "PokedexTypeId" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['ExpirationTimeMs'])) {
            throw new \InvalidArgumentException('Field "ExpirationTimeMs" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['Latitude'])) {
            throw new \InvalidArgumentException('Field "Latitude" (tag 5) is required but has no value.');
        }

        if ( ! isset($values['Longitude'])) {
            throw new \InvalidArgumentException('Field "Longitude" (tag 6) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setSpawnpointId($values['SpawnpointId']);
        $message->setEncounterId($values['EncounterId']);
        $message->setPokedexTypeId($values['PokedexTypeId']);
        $message->setExpirationTimeMs($values['ExpirationTimeMs']);
        $message->setLatitude($values['Latitude']);
        $message->setLongitude($values['Longitude']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'MapPokemonProto',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'SpawnpointId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'EncounterId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'PokedexTypeId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ExpirationTimeMs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->SpawnpointId === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\MapPokemonProto#SpawnpointId" (tag 1) is required but has no value.');
        }

        if ($this->EncounterId === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\MapPokemonProto#EncounterId" (tag 2) is required but has no value.');
        }

        if ($this->PokedexTypeId === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\MapPokemonProto#PokedexTypeId" (tag 3) is required but has no value.');
        }

        if ($this->ExpirationTimeMs === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\MapPokemonProto#ExpirationTimeMs" (tag 4) is required but has no value.');
        }

        if ($this->Latitude === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\MapPokemonProto#Latitude" (tag 5) is required but has no value.');
        }

        if ($this->Longitude === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\MapPokemonProto#Longitude" (tag 6) is required but has no value.');
        }

        if ($this->SpawnpointId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->SpawnpointId);
        }

        if ($this->EncounterId !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->EncounterId);
        }

        if ($this->PokedexTypeId !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->PokedexTypeId);
        }

        if ($this->ExpirationTimeMs !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->ExpirationTimeMs);
        }

        if ($this->Latitude !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->Latitude);
        }

        if ($this->Longitude !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->Longitude);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SpawnpointId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->EncounterId = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->PokedexTypeId = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->ExpirationTimeMs = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->Latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->Longitude = $reader->readDouble($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->SpawnpointId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->SpawnpointId);
        }

        if ($this->EncounterId !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->EncounterId);
        }

        if ($this->PokedexTypeId !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->PokedexTypeId);
        }

        if ($this->ExpirationTimeMs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ExpirationTimeMs);
        }

        if ($this->Latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->Longitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->SpawnpointId = null;
        $this->EncounterId = null;
        $this->PokedexTypeId = null;
        $this->ExpirationTimeMs = null;
        $this->Latitude = null;
        $this->Longitude = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Protobuf\PokemonGo\ResponseEnvelop\MapPokemonProto) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->SpawnpointId = ($message->SpawnpointId !== null) ? $message->SpawnpointId : $this->SpawnpointId;
        $this->EncounterId = ($message->EncounterId !== null) ? $message->EncounterId : $this->EncounterId;
        $this->PokedexTypeId = ($message->PokedexTypeId !== null) ? $message->PokedexTypeId : $this->PokedexTypeId;
        $this->ExpirationTimeMs = ($message->ExpirationTimeMs !== null) ? $message->ExpirationTimeMs : $this->ExpirationTimeMs;
        $this->Latitude = ($message->Latitude !== null) ? $message->Latitude : $this->Latitude;
        $this->Longitude = ($message->Longitude !== null) ? $message->Longitude : $this->Longitude;
    }


}

