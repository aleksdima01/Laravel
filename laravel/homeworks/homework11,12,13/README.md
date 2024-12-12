## Что нужно сделать в 11 работе:

В этой практической работе вы реализуете проект, в котором будут использованы механизмы авторизации и аутентификации пользователей.

1. Создайте новый проект Laravel или откройте уже существующий.

2. Создайте новую ветку вашего репозитория от корневой (main или master).

3. Установите библиотеку Laravel Breeze composer require laravel/breeze.

4. Установите файлы библиотеки php artisan breeze:install.

5. Соберите фронтенд проекта с помощью команд npm install && npm run dev.

6. Перейдите на ваш сайт и проверьте работу механизмов регистрации и аутентификации.

7. Создайте контроллер UsersController командой `php artisan make:controller UsersController`.

8. Создайте в классе UsersController функцию index, которая вернёт список всех пользователей системы.

9. Напишите маршрут ‘/users’ в файле web.php.

10. Создайте миграцию, которая добавит поле is_admin типа boolean в таблицу users.

11. Создайте политику `php artisan make:policy UserPolicy --model=User` и напишите функцию.


```
public function viewAny(User $user)
{
return $user->is_admin;
}
```

12. Зарегистрируйте политику в классе AuthServiceProvider.

```
protected $policies = [
User::class => UserPolicy::class,
];
```

13. Используйте авторизацию действий пользователя внутри контроллера UsersController в функции index.


 ` $this->authorize('view-any', User::class);`


14. Создайте двух пользователей, дайте одному из них роль администратора и попробуйте перейти на маршрут ‘/users’ вашего проекта сначала за неаутентифицированного пользователя, а далее за обычного пользователя и администратора системы.

## Что нужно сделать в 12 работе:

В этой практической работе вы реализуете уведомления через внешние сервисы.

1. Создайте новый проект Laravel или откройте уже существующий.

2. Создайте новую ветку вашего репозитория от корневой (main или master).

3. Настройте регистрацию и аутентификацию пользователей.

4. Настройте почтовый клиент любого сервиса.

5. Впишите в файл .env нужные значения для почтового сервиса.

6. Создайте письмо Welcome.php командой php artisan make:mail Welcome.

7. В конструкторе класса присвойте свойству класса $user параметр конструктора класса.

```
public User $user;
public function __construct(User $user)
{
$this->user = $user;
}
```

8. Создайте шаблон мейлинга welcome.blade.php в директории resources/views/emails с кодом внутри

Добрый день, $user->name, спасибо за регистрацию.

9. Добавьте код отправки вашего письма в функцию store класса RegisteredUserController.

10. Подключите клиент мессенджера Telegram командой composer require irazasyed/telegram-bot-sdk

11. Создайте бота и канал, добавьте бота в телеграм-канал.

12. Укажите в файле .env значения, необходимые для работы бота.

13. Проверьте работу бота с помощью тестового маршрута.

```
Route::get('test-telegram', function () {
Telegram::sendMessage([
'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
'parse_mode' => 'html',
'text' => 'Произошло тестовое событие'
]);
return response()->json([
'status' => 'success'
]);
});
```

14. Добавьте код уведомления в мессенджер о новом пользователе вашей системы в функцию store класса RegisteredUserController.

15. Зарегистрируйтесь на сайте.

16. Проверьте, что сообщение отправлено на электронную почту (рекомендуется использовать для регистрации тот почтовый ящик, с которого отправляется сообщение, чтобы избежать блокировки адреса за спам).

17. Проверьте, что в Telegram пришло уведомление о регистрации нового пользователя.

## Что нужно сделать в 13 работе:

В этой практической работе вы реализуете уведомления через внешние сервисы.

1. Создайте новый проект Laravel или откройте уже существующий.

2. Создайте новую ветку вашего репозитория от корневой (main или master).

3. Создайте сущность Product (модель, миграцию и контроллер) командой php artisan make:model Product -mc.

4. Опишите миграцию для таблицы products c типами полей:
```
$table->string('sku');
$table->string('name');
$table->decimal('price', 9, 3);
```

5. Выполните миграцию командой php artisan migrate.


6. Добавьте в файл api.php маршруты:
`Route::apiResource('products', \App\Http\Controllers\ProductController::class);`

7. Создайте класс-фабрику для сущности Product c помощью команды php artisan make:factory ProductFactory.

8. Создайте класс-наполнитель для сущности Product c помощью команды php artisan make:seeder ProductsSeeder.

9. Выполните команду php artisan migrate –-seed для наполнения базы данных сгенерированными данными.

10. В классе ProductController реализуйте методы index, show, store, update, destroy.

11. Протестируйте каждый из маршрутов контроллера ProductController с помощью Postman и приложите скриншоты ответа на запросы в папку postman-screenshots (названия файлов должны соответствовать формату index.jpeg, show.jpeg, store.jpeg, update.jpeg, destroy.jpeg для каждого метода, соответственно).

12. Создайте тест c помощью команды `php artisan make:test Products/ProductTest`.

13. Опишите функции:
```
test_products_can_be_indexed,
test_product_can_be_shown,
test_product_can_be_stored,
test_product_can_be_updated,
test_product_can_be_destroyed.
```
14. Запустите выполнение тестов командой php artisan test.