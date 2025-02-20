<?
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ReviewController extends AbstractController
{
    private $serializer;

	public function __construct(
		SerializerInterface $serializer,
	) {
        $this->serializer = $serializer;
	}

    #[Route('/user/{id}')]
    public function number(
        #[MapQueryParameter] bool $short,
        User $user,
    ): Response {
        return new JsonResponse($this->serializer->serialize($user, "json", ['groups' => $short === true ?  "user:short" : "user:read"]), Response::HTTP_OK);
    }
}