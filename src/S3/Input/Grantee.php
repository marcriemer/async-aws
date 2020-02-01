<?php

namespace AsyncAws\S3\Input;

class Grantee
{
    /**
     * @var string|null
     */
    private $DisplayName;

    /**
     * @var string|null
     */
    private $EmailAddress;

    /**
     * @var string|null
     */
    private $ID;

    /**
     * @required
     *
     * @var string|null
     */
    private $Type;

    /**
     * @var string|null
     */
    private $URI;

    public static function create($input): self
    {
        return $input instanceof self ? $input : new self($input);
    }

    /**
     * @param array{
     *   DisplayName?: string,
     *   EmailAddress?: string,
     *   ID?: string,
     *   Type: string,
     *   URI?: string,
     * } $input
     */
    public function __construct(array $input = [])
    {
        $this->DisplayName = $input["DisplayName"] ?? null;
        $this->EmailAddress = $input["EmailAddress"] ?? null;
        $this->ID = $input["ID"] ?? null;
        $this->Type = $input["Type"] ?? null;
        $this->URI = $input["URI"] ?? null;
    }

    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }

    public function setDisplayName(?string $value): self
    {
        $this->DisplayName = $value;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }

    public function setEmailAddress(?string $value): self
    {
        $this->EmailAddress = $value;

        return $this;
    }

    public function getID(): ?string
    {
        return $this->ID;
    }

    public function setID(?string $value): self
    {
        $this->ID = $value;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $value): self
    {
        $this->Type = $value;

        return $this;
    }

    public function getURI(): ?string
    {
        return $this->URI;
    }

    public function setURI(?string $value): self
    {
        $this->URI = $value;

        return $this;
    }
}
