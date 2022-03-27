<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class QuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $questions = [
            ["Quelles sont les lois en sophrologie?", [
                'Vivance Phronique, Répétition Vivantielle' => true, 
                'Vivance Phronique, PPI' => false, 
                'Sophronisation, PPI' => false, 
                ]],
            ["Les bases et fonctions", [
                'Mieux dormir' => false, 
                'Faire du schéma corporel une réalité vivante' => true, 
                'Autonomie' => false, 
                'Principe d\'action positive' => true,
                'Réalité objective' => true,
                'Visualisation positive' => false,
                'Adaptabilité' => true,
                ]],
            ["Les directions fondamentales", [
                'Thérapeutique' => true, 
                'Sociétal' => false, 
                'Social' => true, 
                'Complotiste' => false,
                'Prophylactique' => true,
                'Agréable' => false,
                'Pédagogique' => true,
                'Philosophique' => false,
                ]],
            ["Selon Karpman, quels sont les rôles que nous occupons à tour de rôle?", [
                'Sauveur, persécuteur, orateur' => false, 
                'Sauveur, persécuteur, victime' => true, 
                'Victime, guerrier, chevalier' => false,
                ]],
            ["Quelles sont les trois capacités en sophrologie?", [
                'Confidence' => false, 
                'Confiance' => true, 
                'Equilibre' => false,
                'Harmonie' => true,
                'Vision' => false,
                'Espoir' => true,
                ]],
            ["Quels sont les buts?", [
                'Responsabilité' => true, 
                'Bonheur' => false, 
                'Autonomie' => true,
                'Automatisation' => false,
                'Sérénité' => false,
                'Dignité' => true,
                ]],
            ["Quelles sont les différents types de relations?", [
                'Excitante' => false, 
                'Indifférente' => true, 
                'Abusive' => false,
                'Fusionnelle' => true,
                'Amoureuse' => false,
                'Amicale' => false,
                'Pouvoir' => true,
                'Espace commun' => true,
                'Indépendante' => false,
                ]],
            ["Les objectifs du deuxième degré", [
                'Activer les structures de spatialisation du schéma corporel' => true, 
                'Activer les capacités de flottaison du corps' => false, 
                'Pratique d\'une sophro-contemplation perceptive de notre corps dans l\'espace' => true,
                'Voir les yeux fermés' => false,
                'Sensation dominante : la gravitation' => true,
                ]],
            ["Les objectifs du premier degré", [
                'Découverte du schéma corporel' => true, 
                'Découverte de l\'espace' => false, 
                'Entrainement à la sophro-concentration' => true,
                'La désintegration' => false,
                'L\'intégration' => true,
                'Entrainement à la récupération libre et à la description des sensations positives' => true,
                ]],
            ["Que représente le cocher dans l'allégorie de la calèche?", [
                'Corps' => false, 
                'Mental' => true, 
                'Emotions racines' => false,
                'Ce que l\'on veut vraiment' => false,
                ]],
            ["Que représente la calèche dans l'allégorie de la calèche?", [
                'Corps' => true, 
                'Mental' => false, 
                'Emotions racines' => false,
                'Ce que l\'on veut vraiment' => false,
                ]],
            ["Que représente le voyageur dans l'allégorie de la calèche?", [
                'Corps' => false, 
                'Mental' => false, 
                'Emotions racines' => false,
                'Ce que l\'on veut vraiment' => true,
                ]],
            ["Quelles sont les allégories utilisées en sophrologie?", [
                'La caverne et la voiture de Platon' => false, 
                'La caverne et la calèche de Platon' => true, 
                'La maison et la voiture de Platon' => false, 
                ]],
            ["Quelles sont les émotions symbolisées par les chevaux dans l'allégorie de la calèche de Platon?", [
                'Joie, tristesse, peur, colère' => true, 
                'Joie, dégoût, tristesse, ennui' => false, 
                'Joie, tristesse, angoisse, colère' => false,
                ]],
            ["A quoi amène un meilleur ancrage?", [
                'Moins de pensées négatives et d\'angoisse' => true, 
                'Moins de fatigue' => true, 
                'Une baisse de la déréalisation' => true,
                'Plus de confiance, de lâcher-prise' => true,
                'Une meilleure présence à soi et dans son corps' => true,
                'La capacité à voir le futur' => false,
                'Moins de pensées positives et plus d\'angoisse' => false,
                'Un égo surdimensionné' => false,
                ]],
            ["Quelle est l'éthymologie de Sophrologie?", [
                'SOS, PHREN, LOGOS' => true, 
                'SOS, HREN, LOGO' => false, 
                'SO, SPHREN, LOGOS' => false,
                ]],
            ["Quel est le principe fondamental en sophrologie?", [
                'La conquête de la région intérieure du corps par le vécu et l\'activation du schéma corporel' => true, 
                'La remise en action du corps' => true, 
                'La conquête de la région intérieure du corps par le vécu' => true,
                'La conquête de la région intérieure du corps' => true,
                'L\'activation du schéma corporel' => true,
                ]],
            ["A quoi font références les paramètres existentiels?", [
                'Les degrés de la sophrologie' => true, 
                'Les étapes de l\'existence de l\'être' => false, 
                ]],
            ["Quelle est l'épistémologie de la sophrologie?", [
                'Sciences' => true, 
                'Philosophie' => true, 
                'Théories et concepts propres' => true,
                ]],
            ["Quelles sont les théories et concepts propres à la sophrologie?", [
                'Niveaux de conscience' => true, 
                'Intégration dynamique' => false, 
                'Structures phroniques' => true,
                'Région phronique' => false,
                ]],
            ["Quelle ligne de conduite doit adopter le sophrologue?", [
                'Phénoménologique' => true, 
                'Météorologique' => false, 
                'Analytique' => false,
                ]],
            ["Quels sont les objectifs de la sophrologie?", [
                'L\'étude scientifique de la conscience' => true, 
                'L\'étude scientifique de la proprioception' => false, 
                'La défense d\'une philosophie humaniste' => true,
                'La défense d\'une philosophie respiratoire' => false,
                'La pratique d\'une discipline existentielle basée sur des méthodes d\'entrainement de la personnalité' => true,
                'La pratique d\'une discipline essentielle basée sur des méthodes d\'entrainement de la personnalité' => false,
                ]],
            ["Qu'est-ce que l'alliance sophronique?", [
                'Le contrat entre le sophrologue et son client' => true, 
                'Le contrat entre le sophrologue et ses pairs' => false, 
                'Le contrat entre le sophrologue et l\'Etat' => false,
                ]],
            ["Quels sont les principes de l'alliance sophronique?", [
                'La prise en compte de la réalité objective de chacun' => true, 
                'La prise en compte de la réalité subjective de chacun' => false, 
                'Les buts originaux' => false,
                'Les buts fondamentaux' => true,
                'La dynamique sujet/sujet' => true,
                'La dynamique sujet/objet' => false,
                ]],
            ["Où retrouve t-on l'image terminale?", [
                'En médecine' => false, 
                'Dans le SPF, après l\'objectif' => true, 
                'En philosophie' => false,
                ]],
            ["Qu'est-ce que l'homéostasie?", [
                'L\'équilibre de pression entre intérieur et extérieur' => true, 
                'Lorsque l\'homéopathie fonctionne' => false, 
                'L\'équilibre de pression du système sanguin' => false,
                ]],
            ["Que permet la répétition vivantielle?", [
                'La découverte, la conquête et la transformation des structures de la conscience' => true, 
                'La découverte, la conquête et la transformation des structures de la science' => false, 
                'La découverte, la conquête et la transformation des structures de l\'être' => false,
                ]],
            ["Qu'est-ce que le Terpnos Logos ?", [
                'Manière de guider et conduire une pratique, neutre et sans induction' => true, 
                'Façon de parler utilisée par les prêtres-médecins en Grèce antique' => true, 
                'Une technique de sophrologie' => false, 
                'Façon de parler utilisée par les médecins à l\'hôpital' => false,
                ]],
            ["La réalité objective permet de prendre conscience de...", [
                'Ses compétences, capacités, possibilités' => true, 
                'Ses compétences, envies, possibilités' => false, 
                'Ses compétences, émotions, possibilités' => false,
                ]],
            ["Qu'est-ce que la région phronique?", [
                'Espace intérieur devenu présent et où la conscience s\'exprime, dans une relation harmonieuse corps/esprit' => true, 
                'Espace intérieur devenu présent et où les sensations s\'expriment, dans une relation harmonieuse corps/esprit' => false, 
                'Espace intérieur devenu présent et où les tensions s\'expriment, dans une relation harmonieuse corps/esprit' => false,
                ]],
            ["Sélectionnez ce qui ne correspond PAS au schéma corporel", [
                'Une représentation évolutive et adaptable du corps par le cerveau' => false, 
                'Inclut les prolongements' => false, 
                'Intègre les modifications corporelles' => false,
                'Intègre les informations du milieu' => false,
                'Coordonne les gestes et actions' => false,
                'Une représentation fixe et figée du corps par le cerveau' => true,
                'Intègre les membres de l\'entourage' => true,
                ]],
            ["Sélectionnez ce qui correspond au schéma corporel", [
                'Une représentation évolutive et adaptable du corps par le cerveau' => true, 
                'Inclut les prolongements' => true, 
                'Intègre les modifications corporelles' => true,
                'Intègre les informations du milieu' => true,
                'Coordonne les gestes et actions' => true,
                'Une représentation fixe et figée du corps par le cerveau' => false,
                'Intègre les membres de l\'entourage' => false,
                ]],
            ["Sélectionnez ce qui ne correspond PAS à la notion de conscience", [
                'La force responsable de l\'intégration des structures de l\'existence' => false, 
                'La faculté de se représenter sa propre existence et le monde extérieur' => false, 
                'La force responsable de l\'intégration des mémoires de l\'existence' => true,
                'La faculté de se représenter sa maison' => true,
                ]],
            ["Quelles sont les structures sur lesquelles agit le principe d'action positive?", [
                'Physique' => true, 
                'Emotions' => true, 
                'Imagination' => true,
                'Mémoire' => true,
                'Alimentation' => false,
                'Sommeil' => false,
                'Lucidité' => false,
                ]],
            ["Donnez la définition de la sophrologie telle que formulée par Caycedo : ", [
                'Ecole scientifique d\'étude de la conscience' => true, 
                'Etude de la conscience' => true, 
                'Conquête des valeurs de l\'existence' => true,
                'Conquête des valeurs de l\'existence grâce à des procédés propres et originaux' => true,
                'Conquête des valeurs de l\'existence par des procédés propres et originaux' => true,
                'Procédés propres et originaux' => true,
                'Ecole scientifique créée pour l\'étude de la conscience et la conquête des valeurs de l\'existence grâce à des procédés propres et originaux' => true,
                ]],
            ["La Sophro-respiration synchronique (SRS) permet de neutraliser une sensation/émotion sensible", [
                'Vrai' => true, 
                'Faux' => false, 
                ]],
            ["La Sophro-stimulation projective (SSP) n'associe pas une image positive à une sensation positive.", [
                'Vrai' => false, 
                'Faux' => true, 
                ]],
            ["Dans quel cas de figure peut-on faire appel au Sophro-déplacement du négatif (SDN)?", [
                'Pour déplacer une tension, une douleur' => true, 
                'Pour renforcer le positif' => false, 
                'Pour renforcer les capacités' => false, 
                ]],
            ["Sélectionnez les étages de respiration utilisés dans la Progression Respiratoire (PR)", [
                'Abdomen' => true, 
                'Bas thorax (basses côtes)' => true, 
                'Moyen thorax (moyennes côtes)' => true, 
                'Clavicules' => true, 
                'Dos' => false, 
                'Gorge' => false, 
                'Pelvis' => false, 
                ]],
            ["Comment s'appelle l'exercice spécifique du premier degré pour renforcer le positif?", [
                'Sophro-présence du positif' => true, 
                'Sophro présence du positif' => true, 
                'SPP' => true, 
                ]],
            ["Comment s'appelle l'exercice spécifique du deuxième degré pour \"somatiser\" du positif?", [
                'SAP' => true, 
                'Sophro-acceptation progressive' => true, 
                'Sophro acceptation progressive' => true, 
                ]],
            ["Quel exercice est utilisé pour relativiser une situation problématique à venir?", [
                'La sophro-correction sérielle (SCS)' => true, 
                'La sophro-acceptation progressive (SAP)' => false, 
                'La sophro-présence du positif (SPP)' => false, 
                ]],
            ["Que permet de faire la Sophro-programmation du futur (SPF)?", [
                'Se projeter en situation de réussite' => true, 
                'Réussir à coup sûr son objectif' => false, 
                'Développer des supers-pouvoirs' => false, 
                ]],
];

        foreach($questions as $questionBase) {
            $question = new Question();
            $question->setText($questionBase[0])->setIsActive(true);

            foreach($questionBase[1] as $answer => $isCorrect){
                $question->addAnswer((new Answer())
                ->setText($answer)
                ->setIsCorrect($isCorrect)
                );
            }

            $manager->persist($question);
        }

        $manager->flush();
    }
}
