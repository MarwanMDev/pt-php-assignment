<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Top level Category
    // ID 1
    Category::create([
      'title' => 'Category A',
    ]);
    // ID 2
    Category::create([
      'title' => 'Category B',
    ]);
    // ID 3
    Category::create([
      'title' => 'Category C',
    ]);
    // End top level Category

    // =============================

    // Sub Level Category A
    // ID 4
    Category::create([
      'title' => 'Sub A1',
      'parent_id' => 1
    ]);
    // ID 5
    Category::create([
      'title' => 'Sub A2',
      'parent_id' => 1
    ]);
    // End Sub Level Category A

    // =============================

    // Sub Level Category B
    // ID 6
    Category::create([
      'title' => 'Sub B1',
      'parent_id' => 2
    ]);
    // ID 7
    Category::create([
      'title' => 'Sub B2',
      'parent_id' => 2
    ]);
    // End Sub Level Category B

    // =============================

    // Sub Level Category C
    // ID 8
    Category::create([
      'title' => 'Sub C1',
      'parent_id' => 3
    ]);
    // ID 9
    Category::create([
      'title' => 'Sub C2',
      'parent_id' => 3
    ]);
    // End Sub Level Category C

    // =============================

    // Sub Sub Level Category A
    // ID 10
    Category::create([
      'title' => 'Sub Sub A1-1',
      'parent_id' => 4
    ]);
    // ID 11
    Category::create([
      'title' => 'Sub Sub A1-2',
      'parent_id' => 4
    ]);
    // ID 12
    Category::create([
      'title' => 'Sub Sub A2-1',
      'parent_id' => 5
    ]);
    // ID 13
    Category::create([
      'title' => 'Sub Sub A2-2',
      'parent_id' => 5
    ]);
    // End Sub Sub Level Category A

    // =============================

    // Sub Sub Level Category B
    // ID 14
    Category::create([
      'title' => 'Sub Sub B1-1',
      'parent_id' => 6
    ]);
    // ID 15
    Category::create([
      'title' => 'Sub Sub B1-2',
      'parent_id' => 6
    ]);
    // ID 16
    Category::create([
      'title' => 'Sub Sub B2-1',
      'parent_id' => 7
    ]);
    // ID 17
    Category::create([
      'title' => 'Sub Sub B2-2',
      'parent_id' => 7
    ]);
    // End Sub Sub Level Category B

    // =============================

    // Sub Sub Level Category C
    // ID 18
    Category::create([
      'title' => 'Sub Sub C1-1',
      'parent_id' => 8
    ]);
    // ID 19
    Category::create([
      'title' => 'Sub Sub C1-2',
      'parent_id' => 8
    ]);
    // ID 20
    Category::create([
      'title' => 'Sub Sub C2-1',
      'parent_id' => 9
    ]);
    // ID 21
    Category::create([
      'title' => 'Sub Sub C2-2',
      'parent_id' => 9
    ]);
    // End Sub Sub Level Category C

    // =============================

    // Sub Sub Sub Level Category A
    // ID 22
    Category::create([
      'title' => 'Sub Sub Sub A1-1-1',
      'parent_id' => 10
    ]);
    // ID 23
    Category::create([
      'title' => 'Sub Sub Sub A1-2-1',
      'parent_id' => 11
    ]);
    // ID 24
    Category::create([
      'title' => 'Sub Sub Sub A2-1-1',
      'parent_id' => 12
    ]);
    // ID 25
    Category::create([
      'title' => 'Sub Sub Sub A2-2-1',
      'parent_id' => 13
    ]);
    // End Sub Sub Level Category A

    // =============================

    // Sub Sub Sub Level Category B
    // ID 26
    Category::create([
      'title' => 'Sub Sub Sub B1-1-1',
      'parent_id' => 14
    ]);
    // ID 27
    Category::create([
      'title' => 'Sub Sub Sub B1-2-1',
      'parent_id' => 15
    ]);
    // ID 28
    Category::create([
      'title' => 'Sub Sub Sub B2-1-1',
      'parent_id' => 16
    ]);
    // ID 29
    Category::create([
      'title' => 'Sub Sub Sub B2-2-1',
      'parent_id' => 17
    ]);
    // End Sub Sub Level Category B

    // =============================

    // Sub Sub Sub Level Category C
    // ID 30
    Category::create([
      'title' => 'Sub Sub Sub C1-1-1',
      'parent_id' => 18
    ]);
    // ID 31
    Category::create([
      'title' => 'Sub Sub Sub C1-2-1',
      'parent_id' => 19
    ]);
    // ID 32
    Category::create([
      'title' => 'Sub Sub Sub C2-1-1',
      'parent_id' => 20
    ]);
    // ID 33
    Category::create([
      'title' => 'Sub Sub Sub C2-2-1',
      'parent_id' => 21
    ]);
    // End Sub Sub Level Category C

    // =============================
  }
}
