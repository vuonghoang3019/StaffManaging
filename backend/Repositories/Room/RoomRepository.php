<?php

namespace Backend\Repositories\Room;

use App\Models\Room;
use Backend\Repositories\BaseRepository;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{
    public function getModel()
    {
        return Room::class;
    }

    public function paginate()
    {
        return $this->model->paginate(10);
    }
}
