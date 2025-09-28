<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>处理中...</title>
</head>
<body>
    <p>正在处理中，请稍候...</p>
    
    <script>
        // 解析当前URL参数
        const urlParams = new URLSearchParams(window.location.search);
        
        // 获取clickid参数
        const clickId = urlParams.get('clickid');
        
        // 构造原始的目标URL - 重定向回到原始的meldefeno链接
        let originalUrl = 'https://www.meldefeno.guru/click?offer_id=32737&pub_id=277597&pub_click_id=ADD_CLICK_ID_HERE&site=PASS_SITE_HERE';
        
        // 如果提供了clickid参数，可以将其用于替换offer_id（如果需要的话）
        // 但根据您的要求，我们直接重定向到原始链接
        window.location.replace(originalUrl);
    </script>
</body>
</html>