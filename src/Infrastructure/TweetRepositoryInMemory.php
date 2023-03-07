<?php

namespace App\Infrastructure;

use App\Domain\Tweet;
use App\Domain\TweetRepository;

final class TweetRepositoryInMemory implements TweetRepository
{
    private $tweets = [
        "Nel mezzo del cammin di nostra vita",
        "mi ritrovai per una selva oscura",
        "ché la diritta via era smarrita.",
        "Ahi quanto a dir qual era è cosa dura",
        "questa selva selvaggia e aspra e forte",
        "che nel pensier rinova la paura!",
        "Tanto è amara che poco è più morte;",
        "ma per trattar del ben ch'i' vi trovai,",
        "dirò de l'altre cose ch'i' v'ho scorte.",
        "Io non so ben ridir com' i' v'intrai,",
        "tant' era pien di sonno a quel punto",
        "che la verace via abbandonai.",
        "Ma poi ch'i' fui al piè d'un colle giunto,",
        "là dove terminava quella valle",
        "che m'avea di paura il cor compunto,",
        "guardai in alto, e vidi le sue spalle",
        "vestite già de' raggi del pianeta",
        "che mena dritto altrui per ogne calle.",
        "Allor fu la paura un poco queta,",
        "che nel lago del cor m'era durata",
        "la notte ch'i' passai con tanta pieta.",
        "E come quei che con lena affannata,",
        "uscito fuor del pelago a la riva,",
        "si volge a l'acqua perigliosa e guata,",
        "così l'animo mio, ch'ancor fuggiva,",
        "si volse a retro a rimirar lo passo",
        "che non lasciò già mai persona viva.",
        "Poi ch'èi posato un poco il corpo lasso,",
        "ripresi via per la piaggia diserta,",
        "sì che 'l piè fermo sempre era 'l più basso.",
        "Ed ecco, quasi al cominciar de l'erta,",
        "una lonza leggiera e presta molto,",
        "che di pel macolato era coverta;",
        "e non mi si partia dinanzi al volto,",
        "anzi 'mpediva tanto il mio cammino,",
        "ch'i' fui per ritornar più volte vòlto.",
        "Temp' era dal principio del mattino,",
        "e 'l sol montava 'n sù con quelle stelle",
        "ch'eran con lui quando l'amor divino",
        "mosse di prima quelle cose belle;",
        "sì ch'a bene sperar m'era cagione",
        "di quella fiera a la gaetta pelle",
        "l'ora del tempo e la dolce stagione;",
        "ma non sì che paura non mi desse",
        "la vista che m'apparve d'un leone.",
        "Questi parea che contra me venisse",
        "con la test' alta e con rabbiosa fame,",
        "sì che parea che l'aere ne tremesse.",
        "Ed una lupa, che di tutte brame",
        "sembiava carca ne la sua magrezza,",
        "e molte genti fé già viver grame,",
        "questa mi porse tanto di gravezza",
        "con la",
    ];

    /**
     * @param string $username
     * @param int    $limit
     *
     * @return Tweet[]
     */
    public function searchByUserName(string $username, int $limit): array
    {
        $randomEntries = array_rand($this->tweets, $limit);
        $tweets        = [];
        foreach ($randomEntries as $randomEntry) {
            $tweets[] = new Tweet($this->tweets[$randomEntry]);
        }
        return $tweets;
    }
}
