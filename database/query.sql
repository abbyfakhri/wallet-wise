-- menampilkan sisa balance user

select
    user.username,
    user.balance as initial_balance,
    sum(spending.transaction_amount) as total_spend,

    (user.balance-sum(spending.transaction_amount)) as balance_left
from user
join spending
on user.username = spending.username
-- where user.username='freakeinstein'
group by user.username;

-- menampilkan kategori dengan pengeluaran terbanyak
select

    categories.category,
    sum(spending.transaction_amount) as total_spend
    from spending

join categories
on spending.category_id = categories.category_id
group by category;


-- log semua transaksi user
select

    categories.category as kategori,
    spending.transaction_date as tanggal_transaksi,
    spending.transaction_amount
from spending
join categories
on spending.category_id = categories.category_id
join user
on spending.username = user.username
where user.username = 'dizzybunny'
;


-- log transaction last month
select

    categories.category as kategori,
    spending.transaction_date as tanggal_transaksi,
    spending.transaction_amount
from spending
join categories
on spending.category_id = categories.category_id
join user
on spending.username = user.username
where user.username = 'blackmamba'
  and year(transaction_date) = year(now()) --- i can actually add some arithmathic here with eg: year(now())-1 two years ago
  and month(transaction_date) = month(now())