<?php

namespace Backend\Repositories\Slider;

use App\Models\Slider;
use Backend\Repositories\BaseRepository;

class SliderRepository extends BaseRepository implements SliderRepositoryInterface
{
    public function getModel()
    {
        return Slider::class;
    }

    public function paginate()
    {
        return $this->model->paginate(5);
    }
}
