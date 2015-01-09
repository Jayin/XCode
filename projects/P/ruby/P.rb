class P

    def initialize(string)
        @kv = {}
        @str = string
    end

    def P.from(string)
        P.new string
    end

    def put(key,value)
        @kv[key] = value
        self
    end

    def format()
        @kv.each do |key,value|
            @str.gsub!(/{\s*\w+\s*}/) { |match| 
                match.gsub!(/{/,'').gsub!(/}/,'').strip!
                @kv[match]
            }
        end
        @str
    end
end


