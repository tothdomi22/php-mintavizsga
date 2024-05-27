Database creation and migration
Php artisan make:model
You fill out the factory with fakers: 'title' =>$this->faker->text(10),
Then include the factory into the migration file: Post::factory()->count(50)->create();
Php artisan migrate:fresh

query()->get() helyett query()->paginate()
$posts->link


```
public function index(): View
    {
        return view('menu.index' , ['menus' => Menu::query()->latest()->paginate()]);
    }

public function store(ProductRequest $request)
    {
        Product::query()->create($request->validated());
        return redirect('/')->with('status', 'Item created successfully');
    }
```
