<?PHP

namespace ConfrariaWeb\Option\Repositories;

use ConfrariaWeb\Option\Contracts\OptionGroupContract;
use ConfrariaWeb\Option\Models\OptionGroup;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class OptionGroupRepository implements OptionGroupContract
{

    use RepositoryTrait;

    public $obj;

    function __construct(optiongroup $optiongroup)
    {
        $this->obj = $optiongroup;
    }
}
