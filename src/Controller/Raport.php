<?
namespace App\Controller;

use App\Entity\Raport;

class RaportController{
    /**
     * @Route("/raport", name="app_raport")
     */
    public function  show(ManagerRegistry $doctrine, int $id): Response{
        $raport = $doctrine->getRepository(Raport::class)
                                                        ->find($id);

        $this->render(
            $raport
        );
    }


}