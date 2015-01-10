def array_diff(input,*arrs)
    arrs.each do |arr|
        arr.each do |num|
            input.delete(num) if input.include?(num)
        end
    end
    
    input
end



