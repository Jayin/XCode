require './P'

puts P.from('My name is { name },age { age } and height {height}cm').put('name','jayin')
               .put('age',18)
               .put('height',179)
               .format
