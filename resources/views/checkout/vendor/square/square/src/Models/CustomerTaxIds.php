<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents the tax ID associated with a [customer profile]($m/Customer). The corresponding
 * `tax_ids` field is available only for customers of sellers in EU countries or the United Kingdom.
 * For more information, see [Customer tax IDs](https://developer.squareup.com/docs/customers-api/what-
 * it-does#customer-tax-ids).
 */
class CustomerTaxIds implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $euVat;

    /**
     * Returns Eu Vat.
     * The EU VAT identification number for the customer. For example, `IE3426675K`. The ID can contain
     * alphanumeric characters only.
     */
    public function getEuVat(): ?string
    {
        return $this->euVat;
    }

    /**
     * Sets Eu Vat.
     * The EU VAT identification number for the customer. For example, `IE3426675K`. The ID can contain
     * alphanumeric characters only.
     *
     * @maps eu_vat
     */
    public function setEuVat(?string $euVat): void
    {
        $this->euVat = $euVat;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->euVat)) {
            $json['eu_vat'] = $this->euVat;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
