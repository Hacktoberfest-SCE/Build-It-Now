fn main() {
    match check_palindromw("malayalam") {
        Ok(data) => {
            println!("{}", data);
        }
        Err(data) => {
            println!("{}", data);
        }
    }
}

fn check_palindromw(s: &str) -> Result<String, String> {
    let v: Vec<char> = s.chars().collect();
    let mut i = 0;
    let mut j = v.len() - 1;
    println!("{:?}", v);
    while i < j {
        if v[i] != v[j] {
            return Err(String::from("Not a palindrome String!"));
        }

        i += 1;
        j -= 1;
    }

    Ok(String::from("Palindrome String"))
}
