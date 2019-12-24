<?PHP

namespace ConfrariaWeb\Option\Repositories;

use ConfrariaWeb\Option\Contracts\OptionContract;
use ConfrariaWeb\Option\Models\Option;
use ConfrariaWeb\Vendor\Traits\EloquentTrait;

class OptionRepository implements OptionContract
{

    use EloquentTrait;

    function __construct(Option $option)
    {
        $this->obj = $option;
    }

}
