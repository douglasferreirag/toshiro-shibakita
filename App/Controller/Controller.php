namespace App\Controller;

use App\Service\MessageService;

class HomeController
{
    public function index(): string
    {
        $service = new MessageService();
        return $service->getMessage();
    }
}
