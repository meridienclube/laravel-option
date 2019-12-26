<?PHP

namespace ConfrariaWeb\Option\Repositories;

use ConfrariaWeb\Option\Contracts\OptionContract;
use ConfrariaWeb\Option\Models\Option;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class OptionRepository implements OptionContract
{

    use RepositoryTrait;

    function __construct(Option $option)
    {
        $this->obj = $option;
    }

}
