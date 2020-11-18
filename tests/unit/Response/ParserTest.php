<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests\Response;

use Amaccis\Dict\Response\Parser;
use Amaccis\Dict\Response\ResponseInterface;
use PHPUnit\Framework\TestCase;


class ParserTest extends TestCase
{

    public function testParse(): void
    {
        $result = '220 pan.alephnull.com dictd 1.12.1/rf on Linux 4.4.0-1-amd64 <auth.mime> <155851139.29825.1605479740@pan.alephnull.com>
250 ok
150 3 definitions retrieved
151 "dog" gcide "The Collaborative International Dictionary of English v.0.48"
Sundog \Sun"dog`\, n. (Meteorol.)
   1. A luminous spot occasionally seen a few degrees from the
      sun, supposed to be formed by the intersection of two or
      more halos, or in a manner similar to that of halos.
      [1913 Webster]

   2. A fragmentary rainbow; a small rainbow near the horizon;
      -- called also {dog} and {weathergaw}.
      [Webster 1913 Suppl.]
.
151 "Dog" gcide "The Collaborative International Dictionary of English v.0.48"
Dog \Dog\ (d[add]g or d[o^]g), n. [AS. docga; akin to D. dog
   mastiff, Dan. dogge, Sw. dogg.]
   1. (Zool.) A quadruped of the genus {Canis}, esp. the
      domestic dog ({Canis familiaris}).

   Note: The dog is distinguished above all others of the
         inferior animals for intelligence, docility, and
         attachment to man. There are numerous carefully bred
         varieties, as the {akita}, {beagle}, {bloodhound},
         {bulldog}, {coachdog}, {collie}, {Danish dog},
         {foxhound}, {greyhound}, {mastiff}, {pointer},
         {poodle}, {St. Bernard}, {setter}, {spaniel}, {spitz},
         {terrier}, {German shepherd}, {pit bull}, {Chihuahua},
         etc. There are also many mixed breeds, and partially
         domesticated varieties, as well as wild dogs, like the
         dingo and dhole. (See these names in the Vocabulary.)
         [1913 Webster +PJC]

   2. A mean, worthless fellow; a wretch.
      [1913 Webster]

            What is thy servant, which is but a dog, that he
            should do this great thing?           -- 2 Kings
                                                  viii. 13 (Rev.
                                                  Ver. )
      [1913 Webster]

   3. A fellow; -- used humorously or contemptuously; as, a sly
      dog; a lazy dog. [Colloq.]
      [1913 Webster]

   4. (Astron.) One of the two constellations, Canis Major and
      Canis Minor, or the Greater Dog and the Lesser Dog. Canis
      Major contains the Dog Star (Sirius).
      [1913 Webster]

   5. An iron for holding wood in a fireplace; a firedog; an
      andiron.
      [1913 Webster]

   6. (Mech.)
      (a) A grappling iron, with a claw or claws, for fastening
          into wood or other heavy articles, for the purpose of
          raising or moving them.
      (b) An iron with fangs fastening a log in a saw pit, or on
          the carriage of a sawmill.
      (c) A piece in machinery acting as a catch or clutch;
          especially, the carrier of a lathe, also, an
          adjustable stop to change motion, as in a machine
          tool.
          [1913 Webster]

   7. an ugly or crude person, especially an ugly woman. [slang]
      [PJC]

   8. a {hot dog}. [slang]
      [PJC]

   Note: Dog is used adjectively or in composition, commonly in
         the sense of relating to, or characteristic of, a dog.
         It is also used to denote a male; as, dog fox or g-fox,
         a male fox; dog otter or dog-otter, dog wolf, etc.; --
         also to denote a thing of cheap or mean quality; as,
         dog Latin.
         [1913 Webster]

   {A dead dog}, a thing of no use or value. --1 Sam. xxiv. 14.

   {A dog in the manger}, an ugly-natured person who prevents
      others from enjoying what would be an advantage to them
      but is none to him.

   {Dog ape} (Zool.), a male ape.

   {Dog cabbage}, or {Dog\'s cabbage} (Bot.), a succulent herb,
      native to the Mediterranean region ({Thelygonum
      Cynocrambe}).

   {Dog cheap}, very cheap. See under {Cheap}.

   {Dog ear} (Arch.), an acroterium. [Colloq.]

   {Dog flea} (Zool.), a species of flea ({Pulex canis}) which
      infests dogs and cats, and is often troublesome to man. In
      America it is the common flea. See {Flea}, and
      {Aphaniptera}.

   {Dog grass} (Bot.), a grass ({Triticum caninum}) of the same
      genus as wheat.

   {Dog Latin}, barbarous Latin; as, the dog Latin of pharmacy.
      

   {Dog lichen} (Bot.), a kind of lichen ({Peltigera canina})
      growing on earth, rocks, and tree trunks, -- a lobed
      expansion, dingy green above and whitish with fuscous
      veins beneath.

   {Dog louse} (Zool.), a louse that infests the dog, esp.
      {H[ae]matopinus piliferus}; another species is
      {Trichodectes latus}.

   {Dog power}, a machine operated by the weight of a dog
      traveling in a drum, or on an endless track, as for
      churning.

   {Dog salmon} (Zool.), a salmon of northwest America and
      northern Asia; -- the {gorbuscha}; -- called also {holia},
      and {hone}.

   {Dog shark}. (Zool.) See {Dogfish}.

   {Dog\'s meat}, meat fit only for dogs; refuse; offal.

   {Dog Star}. See in the Vocabulary.

   {Dog wheat} (Bot.), Dog grass.

   {Dog whelk} (Zool.), any species of univalve shells of the
      family {Nassid[ae]}, esp. the {Nassa reticulata} of
      England.

   {To give to the dogs}, or {To throw to the dogs}, to throw
      away as useless. "Throw physic to the dogs; I\'ll none of
      it." --Shak.

   {To go to the dogs}, to go to ruin; to be ruined.
      [1913 Webster]
.
151 "Dog" gcide "The Collaborative International Dictionary of English v.0.48"
Dog \Dog\, v. t. [imp. & p. p. {Dogged}; p. pr. & vb. n.
   {Dogging}.]
   To hunt or track like a hound; to follow insidiously or
   indefatigably; to chase with a dog or dogs; to worry, as if
   by dogs; to hound with importunity.
   [1913 Webster]

         I have been pursued, dogged, and waylaid. -- Pope.
   [1913 Webster]

         Your sins will dog you, pursue you.      --Burroughs.
   [1913 Webster]

         Eager ill-bred petitioners, who do not so properly
         supplicate as hunt the person whom they address to,
         dogging him from place to place, till they even extort
         an answer to their rude requests.        -- South.
   [1913 Webster]
.
250 ok [d/m/c = 3/0/18; 0.000r 0.000u 0.000s]
221 bye [d/m/c = 0/0/0; 0.000r 0.000u 0.000s]';
        $parser = new Parser($result);
        $response = $parser->parse();
        $this->assertIsArray($response);
        /** @var ResponseInterface $firstItem */
        $firstItem = $response[0];
        $this->assertEquals('220', $firstItem->getCode());
        $this->assertEquals('pan.alephnull.com dictd 1.12.1/rf on Linux 4.4.0-1-amd64 <auth.mime> <155851139.29825.1605479740@pan.alephnull.com>', $firstItem->getText());
        /** @var ResponseInterface $secondItem */
        $secondItem = $response[1];
        $this->assertEquals('250', $secondItem->getCode());
        $this->assertEquals('ok', $secondItem->getText());
        /** @var ResponseInterface $thirdItem */
        $thirdItem = $response[2];
        $this->assertEquals('150', $thirdItem->getCode());
        $this->assertEquals('3 definitions retrieved', $thirdItem->getText());
        $fourthItem = $response[3];
        $this->assertEquals('151', $fourthItem->getCode());
        $this->assertEquals('"dog" gcide "The Collaborative International Dictionary of English v.0.48"
Sundog \Sun"dog`\, n. (Meteorol.)
   1. A luminous spot occasionally seen a few degrees from the
      sun, supposed to be formed by the intersection of two or
      more halos, or in a manner similar to that of halos.
      [1913 Webster]

   2. A fragmentary rainbow; a small rainbow near the horizon;
      -- called also {dog} and {weathergaw}.
      [Webster 1913 Suppl.]
.', $fourthItem->getText());
        /** @var ResponseInterface $seventhItem */
        $seventhItem = $response[6];
        $this->assertEquals('250', $seventhItem->getCode());
        $this->assertEquals('ok [d/m/c = 3/0/18; 0.000r 0.000u 0.000s]', $seventhItem->getText());

        $eighth = $response[7];
        $this->assertEquals('221', $eighth->getCode());
        $this->assertEquals('bye [d/m/c = 0/0/0; 0.000r 0.000u 0.000s]', $eighth->getText());
    }
}