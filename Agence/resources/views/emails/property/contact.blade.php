<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de conatct a été fait pour le bien <a href="{{ route('property.show', 
['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>. 

- Prénom : {{ $data['firstname'] }}
- Nom : {{ $data['lastname'] }}
- Téléphone : {{ $data['phone'] }}
- Prénom : {{ $data['firstname'] }}
- Email : {{ $data['email'] }}

Message : <br/>
{{ $data['message'] }}

</x-mail::message>
