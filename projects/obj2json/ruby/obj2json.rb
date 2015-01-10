require 'json'

user = {
    :name =>'jayin',
    :age  => 18,
    :friends => [
        {
            :name =>'f1',
            :age  => 12
        },
        {
            :name =>'f2',
            :age  => 22
        }
    ]
}

puts user.to_json