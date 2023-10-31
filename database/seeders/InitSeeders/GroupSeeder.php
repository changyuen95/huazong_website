<?php

namespace Database\Seeders\InitSeeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $groupQuery = Group::query();

        $groups = [
            '马来西亚中华大会堂总会',
            '沙巴中华大会堂',
            '砂拉越华人社团联合总会',
            '柔佛州中华总会',
            '彭亨华人社团联合会',
            '登嘉楼中华大会堂',
            '吉兰丹中华大会堂',
            '槟州华人大会堂',
            '吉隆坡暨雪兰莪中华大会堂',
            '森美兰中华大会堂',
            '马六甲中华大会堂',
            '吉打州华人大会堂',
            '玻璃市州华人大会堂'
        ];


        if ($groupQuery->exists()) {
            $existsGroup = $groupQuery->get();
            foreach ($existsGroup as $group) {
                $groupQuery->where('id', $group->id)->update([
                    'name' => $group->name
                ]);
            }
        } else {
            foreach ($groups as $group) {
                $groupQuery->create([
                    'name' => $group
                ]);
            }
        }
    }
}
